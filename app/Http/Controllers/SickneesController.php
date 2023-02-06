<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sicknees;
class SickneesController extends Controller
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
       $sicknees=Sicknees::all();
       return view('sicknees.index',compact('sicknees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('sicknees.create');
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
            "pr_name"=>"required",
            "en_name"=>"required",
            "price"=>"required|numeric",
        ]);
        
        $sicknees=new Sicknees;
        $sicknees->per_name=$request->pr_name;
        $sicknees->eng_name=$request->en_name;
        $sicknees->price=$request->price;
        $sicknees->save();
        session()->flash("msg","معلومات موفقانه ثبت شد!");
        return redirect()->route('sicknees.index');
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
        $sick=Sicknees::find($id);
         return view('sicknees.edit',compact('sick'));
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
            "pr_name"=>"required",
            "en_name"=>"required",
            "price"=>"required",
        ]);
         
        $sick=Sicknees::find($id);
        $sick->per_name=$request->pr_name;
        $sick->eng_name=$request->en_name;
        $sick->price=$request->price;
        $sick->save();
        Session()->flash("msg","ویرایش معلومات موفقانه انجام شد!");
        return redirect()->route('sicknees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sick=Sicknees::findOrFail($id);
        $sick->Delete();
        session()->flash("msg","معلومات موفقانه حذف شد!");
        return redirect()->route('sicknees.index');

    }
}
