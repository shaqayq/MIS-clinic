<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class ServiceReportController extends Controller
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
            $today=DATE_FORMAT(NOW(),'y-m-d');
            $month=Carbon::now()->month;
            $year=Carbon::now()->year;
            
            //dd($month);
            $daily_report=DB::table('patients')->join('h_medicians','patients.id','h_medicians.p_id')
            ->join('sicknees','sicknees.id','h_medicians.s_id')->select('price')
            ->where('date','=',$today)->sum('price');

            $monthly_report=DB::table('patients')->join('h_medicians','patients.id','h_medicians.p_id')
            ->join('sicknees','sicknees.id','h_medicians.s_id')->select('price')
            ->whereMonth('patients.created_at',$month)->sum('price');

              $year_report=DB::table('patients')->join('h_medicians','patients.id','h_medicians.p_id')
            ->join('sicknees','sicknees.id','h_medicians.s_id')->select('price')
            ->whereYear('patients.created_at',$year)->sum('price');
            
          
            $report=DB::table('h_medicians')->join('sicknees','h_medicians.s_id','sicknees.id')
            ->select('sicknees.per_name',DB::raw('count(h_medicians.p_id) as patient_number'),DB::raw('sum(price) as total'))
           ->groupBy('sicknees.per_name')->get();
            
      
        return view('service_report.index',compact('report','daily_report','monthly_report','year_report'));
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
        //
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
        //
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
        //
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
