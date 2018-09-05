<?php

namespace App\Http\Controllers;

use App\Budget;
use App\Other;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Oindex()
    {
        $waters = Other::all();
        return view('OtherRecord',compact('waters'));
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
    public function Ostore(Request $request)
    {

        $this->validate($request,[

             'MonthYear'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'Year'=>['required','regex:/^[0-9]+$/'],
            'Purpose'=>'required',
            'Company'=>'required',
            'PaymentMethod'=>'required',
            'Amount'=>'required',
        ],[

            'MonthYear.regex'=>'Invalid Format ',
            'Year.regex'=>'Incorrect',


        ]);





        $bills = Other::where('MonthYear','=',$request->get('MonthYear'))->first();

        //$bills ->MonthYear = $request->input('MonthYear');

        $bills = new Other();
        $bills ->MonthYear = Input::get('MonthYear');
        $bills ->Year = Input::get('Year');
        $bills ->Purpose = Input::get('Purpose');
        $bills->Company=Input::get('Company');
        $bills ->PaymentMethod = Input::get('PaymentMethod');
        $bills ->Amount = Input::get('Amount');
        $bills ->PaidDate = Input::get('PaidDate');
        $bills->Save();
        return redirect("Oindex");



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
    public function Oedit($Oid)
    {
        $waters =Other::where('MonthYear','=',$Oid);
        //return view('ElectricUpdate',compact('Electrics'));
        return view('OtherUpdate',compact('waters','Oid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Oupdate(Request $request)
    {
        $this->validate($request,[

            'MonthYear'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'Year'=>['required','regex:/^[0-9]+$/'],
            'Purpose'=>'required',
            'Company'=>'required',
            'PaymentMethod'=>'required',
            'Amount'=>'required',
        ],[

            'MonthYear.regex'=>'Invalid Format ',
            'Year.regex'=>'Incorrect',


        ]);

        $bills = Other::where('Purpose','=',$request->get('Purpose'))->first();

        $bills ->MonthYear = $request->input('MonthYear');
        $bills ->Year = $request->input('Year');
        //$bills ->Purpose = $request->input('Place');
        $bills->Company =$request ->input('Company');
        $bills ->PaymentMethod = $request->input('PaymentMethod');
        $bills ->Amount = $request->input('Amount');
        $bills ->PaidDate = $request->input('PaidDate');
        $bills->save();

        //dd($bills);
        return redirect("Oindex");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Odestroy($Purpose)
    {
        $bills =Other::where('Purpose','=',$Purpose);
        $bills->delete();
        return redirect("Oindex");
    }
}
