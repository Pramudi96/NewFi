<?php

namespace App\Http\Controllers;

use App\AcademicSalary;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Aindex()
    {
        $waters = AcademicSalary::all();
        return view('AcademicRecord',compact('waters'));
    }

    public function Asearch(Request $request)
    {

        $result = $this->validate($request,[
            'monthYear'=>['required','exists:waters,MonthYear'],
        ],[
            //'MonthYear.regex'=>'error message',
            'monthYear.exists'=>'Record Not Found',
        ]);


        $waters = AcademicSalary::where('MonthYear','=',$request->input('monthYear'))->get();
        return view("AcademicRecord",compact("waters"));


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
    public function Astore(Request $request)
    {
        $this->validate($request,[



            'EmpNo'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'EmpName'=>['required','regex:/^[a-zA-Z]+$/'],
            'PaySlipNo'=>['required','unique:academic_salaries','regex:/[0-9a-zA-Z]+$/'],
            'MonthYear'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'ReceivedDate'=>'required',
            'Salary'=>'required',
        ],[


            'EmpNo.regex'=>'Invalid Format',
            'EmpName.regex'=>'Inavlid Format',
            'MonthYear.regex'=>'Invalid Format ',
            'PaySlipNo.regex'=>'Invalid Format',

        ]);


        $bills = new AcademicSalary();
        $bills->EmpNo=Input::get('EmpNo');
        $bills->EmpName=Input::get('EmpName');
        $bills ->PaySlipNo = Input::get('PaySlipNo');
        $bills ->MonthYear = Input::get('MonthYear');
        $bills ->ReceivedDate = Input::get('ReceivedDate');
        $bills ->Salary = Input::get('Salary');
        $bills->Save();



        return redirect("Aindex");


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
    public function Aedit($id)
    {
        $waters =AcademicSalary::where('EmpNo','=',$id);
        return view('AcademicUpdate',compact('waters','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Aupdate(Request $request)
    {
        $this->validate($request,[



            'EmpNo'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'EmpName'=>['required','regex:/^[a-zA-Z]+$/'],
            'PaySlipNo'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'MonthYear'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'ReceivedDate'=>'required',
            'Salary'=>'required',
        ],[


            'EmpNo.regex'=>'Invalid Format',
            'EmpName.regex'=>'Inavlid Format',
            'MonthYear.regex'=>'Invalid Format ',
            'PaySlipNo.regex'=>'Invalid Format',

        ]);

        $bills = AcademicSalary::where('EmpNo','=',$request->input('EmpNo'))->first();

        // $bills ->MonthYear = $request->input('MonthYear');
        $bills ->EmpNo = $request->input('EmpNo');
        $bills ->EmpName = $request->input('EmpName');
        $bills ->MonthYear = $request->input('MonthYear');
        $bills ->PaySlipNo = $request->input('PaySlipNo');
        $bills ->Salary = $request->input('Salary');
        $bills ->ReceivedDate = $request->input('ReceivedDate');
        $bills->save();

        //dd($bills);
        return redirect("Aindex");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Adestroy($id)
    {
        $bills =AcademicSalary::where('EmpNo','=',$id);
        $bills->delete();
        return redirect("Aindex");
    }
}
