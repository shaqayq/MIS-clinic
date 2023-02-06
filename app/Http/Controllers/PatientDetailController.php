<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Sicknees;
use App\H_medician;
use DB;
class PatientDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $p=new H_medician;
        $p->p_id=$request->p_id;
        $p->s_id=$request->sick;
        $p->result=$request->result;
        $p->next_date=$request->date;
        $p->save();
        session()->flash("msg","معلومات بیمار موفقانه ثبت شد!");
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
        $patient=Patient::find($id);
        $sick=DB::table('h_medicians')->join('sicknees','h_medicians.s_id','sicknees.id')
        ->select('sicknees.per_name','h_medicians.*')->where('h_medicians.p_id',$id)->first();
        //dd($sick);
        return view('p_detail.show',compact('patient','sick'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient=Patient::find($id);
        $sick=Sicknees::all();
        return view('p_detail.create',compact('patient','sick'));
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
        
        $p=h_medician::find($id);
        $p->result=$request->result;
        $p->next_date=$request->date;
        $p->save();
        session()->flash("msg","معلومات بیمار موفقانه ثبت شد!");
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
        //
    }
}
