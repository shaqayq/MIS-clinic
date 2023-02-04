<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\user;
use App\Job;
use Hash;

use DB;
use Illuminate\Support\Facades\Auth;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }
    
    public function index()
    {
        $user=User::all();
       
       return view('users.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $role=Role::all();
        $job=Job::all();
        return view('users.create',compact("role","job"));
    }
      public function test()
    {   
        echo "test";
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
      
       $this->validate($request,[
        'name'=>'required',
        'l_name'=>'required',
        'email'=>'required|email',
        'phone'=>'required|max:10|min:10',
        'password'=>'required|min:6|confirmed',
        'password_confirmation'=>'required|min:6'
       ]);
       $emp=new User;
       
       $emp->name=$request->name;
       $emp->L_name=$request->l_name;
       $emp->email=$request->email;
       $emp->phone=$request->phone;
       $emp->password= bcrypt($request->password);
       $emp->role=$request->role;
       $emp->job_id=$request->job;
       $emp->save();
       session()->flash("msg","معلومات موفقانه ثبت شد!");
       return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        $role=Role::all();
        $job=Job::all();
        return view('users.edit',compact('user','role','job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    $this->validate($request,[
        'name'=>'required',
        'l_name'=>'required',
        'email'=>'required|email',
        'phone'=>'required|max:10|min:10',
        'password'=>'required|min:6|confirmed',
        'password_confirmation'=>'required|min:6'
       ]);
        $user=User::find($id);
        $user->name=$request->name;
        $user->L_name=$request->l_name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->role=$request->role;
         $user->job_id=$request->job;
        $user->save();
        Session()->flash("msg","ویرایش معلومات موفقانه انجام شد!");
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->Delete();
        session()->flash("msg","معلومات موفقانه حذف شد!");
        return redirect()->route('user.index');
    }
}
