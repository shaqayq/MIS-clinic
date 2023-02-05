<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Session;
class JobController extends Controller
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
        $job=job::all();
        return view('jobs.index',compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->Validate($request,[
            'pr_name'=>'required',
            'en_name'=>'required',
        ]);
        $job=new Job;
        $job->Pr_name=$request->pr_name;
        $job->En_name=$request->en_name;
        $job->save();
        session()->flash("msg","معلومات موفقانه ثبت شد!");
        return redirect()->route('job.index');
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
        $job=Job::find($id);
        return view('jobs.edit',compact('job'));
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
        $this->Validate($request,[
            'pr_name'=>'required',
            'en_name'=>'required',
        ]);
        $job=job::find($id);
        $job->Pr_name=$request->pr_name;
        $job->En_name=$request->en_name;
        $job->save();
        Session()->flash("msg","ویرایش معلومات موفقانه انجام شد!");
        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job=Job::findOrFail($id);
         $job->Delete();
        //Session::flash('msg','موفقانه حذف شد!');
        session()->flash("msg","معلومات موفقانه حذف شد!");
        return redirect()->route('job.index');
    }
}
