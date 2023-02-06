<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expend;
class ExpendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $exp=Expend::all();
        return view('expends.index',compact('exp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
         return view('expends.create');
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
         'date'=>'required|date',
         'cost'=>'required|numeric',
          'behalf'=>'required'
        ]);
        $exp=new Expend;
        $exp->date=$request->date;
        $exp->cost=$request->cost;
        $exp->behalf=$request->behalf;
        $exp->save();
        session()->flash("msg","معلومات موفقانه ثبت شد!");
        return redirect()->route('expend.index');
        
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
       $exp=Expend::find($id);
        return view('expends.edit',compact('exp'));
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
         'date'=>'required|date',
         'cost'=>'required|numeric',
          'behalf'=>'required'
        ]);
        $exp=Expend::find($id);
        $exp->date=$request->date;
        $exp->cost=$request->cost;
        $exp->behalf=$request->behalf;
        $exp->save();
        Session()->flash("msg","ویرایش معلومات موفقانه انجام شد!");
        return redirect()->route('expend.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $exp=Expend::findOrFail($id);
       $exp->Delete();
       session()->flash("msg","معلومات موفقانه حذف شد!");
        return redirect()->route('expends.index');
    }
}
