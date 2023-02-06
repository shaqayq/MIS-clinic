<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Sicknees;
use App\Patient;
use DB;
class PatientController extends Controller
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
        $patient=Patient::all();
        return view('patients.index',compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $patient=Patient::all();
        return view('patients.create',compact('patient'));
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
            "name"=>"required",
            "f_name"=>"required",
            "l_name"=>"required",
            "age"=>"required|numeric",
            "date"=>"required|date",
            "job"=>"required",
            
        ]);
        $patient=new Patient;
        $patient->name=$request->name;
        $patient->f_name=$request->f_name;
        $patient->L_name=$request->l_name;
        $patient->age=$request->age;
        $patient->sex=$request->sex;
        $patient->job=$request->job;    
        $patient->date=$request->date;
        $patient->save();
        session()->flash("msg","ثبت بیمار موفقانه انجام شد!");
        return redirect()->route('patient.index');
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
        $patient=Patient::findOrFail($id);
       /* $info=DB::table('patients')->join('users','patients.dr_id','users.id')
        ->join('sickneess','patients.ser_id','sickneess.id')
        ->select('patients.*','users.name as d_name','sickneess.name as s_name')->where('patients.id',$id)->first();*/
        return view('patients.edit',compact('patient'));
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
            "name"=>"required",
            "f_name"=>"required",
            "l_name"=>"required",
            "age"=>"required|numeric",
            "date"=>"required|date",
            "job"=>"required",
            
        ]);
        $patient=Patient::find($id);
        $patient->name=$request->name;
        $patient->f_name=$request->f_name;
        $patient->L_name=$request->l_name;
        $patient->age=$request->age;
        $patient->sex=$request->sex;
        $patient->job=$request->job;    
        $patient->date=$request->date;
        $patient->save();
        Session()->flash("msg","ویرایش معلومات موفقانه انجام شد!");
        return redirect()->route('patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        $patient=Patient::find($id);
        $patient->Delete();
        session()->flash("msg","معلومات موفقانه حذف شد!");
        return redirect()->route('patient.index');
    }
}
