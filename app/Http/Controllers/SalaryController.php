<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Salary;
use App\Employee;
use Carbon\Carbon;
class SalaryController extends Controller
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
        $date=Carbon::now()->month;
        //sql for select data in  salary page
        $salary=DB::table('employees')->join('jobs','employees.job_id','jobs.id')
        ->select('employees.*','jobs.Pr_name')->get();
      
        //sql for select employees salary history
        $h_salary=DB::table('employees')->join('jobs','employees.job_id','jobs.id')
        ->join('salaries','employees.id','salaries.emp_id')
        ->select('employees.*','jobs.Pr_name','salaries.*')->whereMonth('salaries.created_at',$date)->get();
        
       
  
        return view('salary.index',compact('salary','h_salary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salary.salaryPayment');
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
            'total'=>'required|numeric',
            'cash'=>'required',
            'date'=>'required',
            'loan'=>'required'
        ]);
        $salary=new Salary;
        $salary->total=$request->total;
        $salary->cash=$request->cash;
        $salary->loan=$request->loan;
        $salary->date=$request->date;
        $salary->emp_id=$request->id;
        $salary->save();
        session()->flash("msg","معاش موفقانه اضافه شد!");
        return redirect()->route('salary.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        $emp=Employee::find($id);

        return view('salary.create',compact('emp'));
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
          $empe=$emp()->emp_id;
        dd($empe);
        return view("salary.edit",compact('emp'));
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

     public function show_detail($id){

        $emp=Employee::find($id);
        $detail=DB::table('salaries')->select('*')->where('emp_id',$id)->get();
        $sum=DB::table('salaries')->where('emp_id',$id)->sum('total');
        return view('salary.detail',compact('detail','emp','sum'));
     }
    
}
