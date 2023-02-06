<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Employee;
use DB;
class EmployeeController extends Controller
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

       $emp=DB::table('employees')->join('jobs','employees.job_id','jobs.id')
        ->select('employees.*','jobs.Pr_name as job')->get();
       ;
       return view('employees.index',compact('emp')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $job=Job::all();
        return view('employees.create',compact("job"));
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
        'job'=>'required'
       ]); 
       $emp=new Employee;
       $emp->e_name=$request->name;
       $emp->last_name=$request->l_name;
       $emp->email=$request->email;
       $emp->e_phone=$request->phone;
       $emp->job_id=$request->job;
       $emp->save();
       session()->flash("msg","معلومات موفقانه ثبت شد!");
       return redirect()->route('employee.index');
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
        $emp=Employee::find($id);
        $job=Job::all();
        return view('employees.edit',compact('emp','job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'name'=>'required',
        'l_name'=>'required',
        'email'=>'required|email',
        'phone'=>'required|max:10|min:10',
        'job'=>'required'
       ]); 
       $emp=Employee::find($id);
       $emp->e_name=$request->name;
       $emp->last_name=$request->l_name;
       $emp->email=$request->email;
       $emp->job_id=$request->job;
       $emp->save();
       Session()->flash("msg","ویرایش معلومات موفقانه انجام شد!");
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $user=Employee::findOrFail($id);
        $user->Delete();
        session()->flash("msg","معلومات موفقانه حذف شد!");
        return redirect()->route('employee.index');
    }
}
