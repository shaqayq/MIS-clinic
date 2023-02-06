<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        
        $today=DATE_FORMAT(NOW(),'y-m-d');
        $month=Carbon::now()->month;
        $year=Carbon::now()->year;
        
        $patient_today=DB::table('patients')->select('name')->where('date','=',$today)
        ->count('name');

        $patient_month=DB::table('patients')->select('name')->whereMonth('created_at',$month)
        ->count('name');

        $patient_year=DB::table('patients')->select('name')->whereYear('created_at',$year)
        ->count('name');

        $reserve_patient=DB::table('h_medicians')->select('id')->where('next_date','=',$today)
        ->count('id');
        //dd($patient_month);
        return view('home',compact('patient_today','patient_month','patient_year','reserve_patient'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today=DATE_FORMAT(NOW(),'y-m-d');
        $month=Carbon::now()->month;
        
        
        $patient_today=DB::table('patients')->select('*')->where('date','=',$today)
        ->get();

        $patient_month=DB::table('patients')->select('*')->whereMonth('created_at',$month)
        ->get();

        

        $reserve_patient=DB::table('h_medicians')->select('*')->where('next_date','=',$today)
        ->count('id');
        //dd($patient_month);
        return view('detail',compact('patient_today','patient_month','reserve_patient'));
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
        $today=DATE_FORMAT(NOW(),'y-m-d');
        $month=Carbon::now()->month;
        if($id == 1){
            //today_patients
            $info=DB::table('patients')->select('*')->where('date','=',$today)
            ->get();
             session()->flash("title","امروز");
        }
        //this month patients
        elseif($id == 2){
            $info=DB::table('patients')->select('*')->whereMonth('created_at',$month)
            ->get();
            session()->flash("title"," این ماه");
        }
        //reserved patients
        elseif($id == 3){
           
            $info=DB::table('patients')->join('h_medicians','patients.id','h_medicians.p_id')
            ->select('patients.*')->where('h_medicians.next_date','=',$today)->get();
            session()->flash("title"," ریزرفی");
        }
        return view('detail',compact('info'));
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
