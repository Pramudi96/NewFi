<?php

namespace App\Http\Controllers;

use App\NonAcademicSalary;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class NonAcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Nindex()
    {
        $waters = NonAcademicSalary::all();
        return view('NonAcademicRecord',compact('waters'));
    }

    public function Nsearch(Request $request)
    {

        $result = $this->validate($request,[
            'monthYear'=>['required','exists:waters,MonthYear'],
        ],[
            //'MonthYear.regex'=>'error message',
            'monthYear.exists'=>'Record Not Found',
        ]);


        $waters = NonAcademicSalary::where('MonthYear','=',$request->input('monthYear'))->get();
        return view("NonAcademicRecord",compact("waters"));


    }
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
    public function Nstore(Request $request)
    {
        $this->validate($request,[



            'EmpNo'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'EmpName'=>['required','regex:/^[a-zA-Z]+$/'],
            'Designation'=>'required',
            'PaySlipNo'=>['required','unique:non_academic_salaries','regex:/[0-9a-zA-Z]+$/'],
            'MonthYear'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'Year'=>['required','regex:/^[0-9]+$/'],
            'ReceivedDate'=>'required',
            'Salary'=>'required',
        ],[


            'EmpNo.regex'=>'Invalid Format',
            'EmpName.regex'=>'Inavlid Format',
            'MonthYear.regex'=>'Invalid Format ',
            'Year.regex'=>'Incorrect',
            'PaySlipNo.regex'=>'Invalid Format',

        ]);


        $bills = new NonAcademicSalary();
        $bills->EmpNo=Input::get('EmpNo');
        $bills->EmpName=Input::get('EmpName');
        $bills->Designation=Input::get('Designation');
        $bills ->PaySlipNo = Input::get('PaySlipNo');
        $bills ->MonthYear = Input::get('MonthYear');
        $bills ->Year = Input::get('Year');
        $bills ->ReceivedDate = Input::get('ReceivedDate');
        $bills ->Salary = Input::get('Salary');
        $bills->Save();



        return redirect("Nindex");


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
    public function Nedit($id)
    {
        $waters = NonAcademicSalary::where('EmpNo','=',$id);
        return view('NonAcademicUpdate',compact('waters','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Nupdate(Request $request)
    {
        $this->validate($request,[



            'EmpNo'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'EmpName'=>['required','regex:/^[a-zA-Z]+$/'],
            'Designation'=>'required',
            //'PaySlipNo'=>['required','unique:academic_salaries','regex:/[0-9a-zA-Z]+$/'],
            'MonthYear'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'Year'=>['required','regex:/^[0-9]+$/'],
            'ReceivedDate'=>'required',
            'Salary'=>'required',
        ],[


            'EmpNo.regex'=>'Invalid Format',
            'EmpName.regex'=>'Inavlid Format',
            'MonthYear.regex'=>'Invalid Format ',
            'Year.regex'=>'Incorrect',
            'PaySlipNo.regex'=>'Invalid Format',

        ]);

        $bills = NonAcademicSalary::where('EmpNo','=',$request->input('EmpNo'))->first();

        // $bills ->MonthYear = $request->input('MonthYear');
        $bills ->EmpNo = $request->input('EmpNo');
        $bills ->EmpName = $request->input('EmpName');
        $bills->Designation =$request->input('Designation');
        $bills ->MonthYear = $request->input('MonthYear');
        $bills ->Year = $request->input('Year');
        $bills ->PaySlipNo = $request->input('PaySlipNo');
        $bills ->Salary = $request->input('Salary');
        $bills ->ReceivedDate = $request->input('ReceivedDate');
        $bills->save();

        //dd($bills);
        return redirect("Nindex");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Ndestroy($id)
    {
        $bills = NonAcademicSalary::where('EmpNo','=',$id);
        $bills->delete();
        return redirect("Nindex");
    }
}
