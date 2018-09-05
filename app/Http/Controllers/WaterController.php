<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pro;
use App\Water;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\Authenticatable;
class WaterController extends Controller
{



    public function index()
    {
        $waters = Water::all();
        return View("delete",compact("waters"));
    }

    public function search(Request $request)
    {
        $result = $this->validate($request,[
            'monthYear'=>['required','exists:waters,MonthYear'],
        ],[
            //'MonthYear.regex'=>'error message',
            'monthYear.exists'=>'Record Not Found',
        ]);

        $waters = Water::where('monthYear','=',$request->input('monthYear'))->get();
        return view("delete",compact("waters"));


    }
    public function create()
    {
        return view("Waterphone");
    }


    public function store(Request $request)
    {

        $this->validate($request,[

            'MonthYear'=>['required','unique:waters','regex:/[0-9a-zA-Z]+$/'],
            'Year'=>['required','regex:/^[0-9]+$/'],
            'Place'=>['required','regex:/^[a-zA-Z]+$/'],
            'PaymentMethod'=>'required',
            'Amount'=>'required',
        ],[

            'MonthYear.regex'=>'Invalid Format ',
            'Year.regex'=>'Incorrect',
            'Place.regex'=>'Incorrect '

        ]);


        $bills = new Water();
        $bills ->MonthYear = Input::get('MonthYear');
        $bills ->Year = Input::get('Year');
        $bills ->Place = Input::get('Place');
        $bills ->PaymentMethod = Input::get('PaymentMethod');
        $bills ->Amount = Input::get('Amount');
        $bills ->PaidDate = Input::get('PaidDate');
        $bills->Save();



        return redirect("index");
    }


    public function Tshow($id)
    {

    }
    public function TSum(Request $request)
    {
        $waters = Water::where('Year', '=', $request->input('Year'))->sum('Amount');
        //$total=0;
        //$total += $waters;
        //return $total;
        return $waters;
    }

    public function edit($Wid)
    {
        $waters =Water::where('Wid','=',$Wid);
        return view('WaterUpdate',compact('waters','Wid'));

    }


    public function update(Request $request)
    {
        $this->validate($request,[

            //'MonthYear'=>['required','unique:waters','regex:/[0-9a-zA-Z]+$/'],
            'Year'=>['required','regex:/^[0-9]+$/'],
            'Place'=>['required','regex:/^[a-zA-Z]+$/'],
            'PaymentMethod'=>'required',
            'Amount'=>'required',
        ],[

            //'MonthYear.regex'=>'Invalid Format ',
            'Year.regex'=>'Incorrect',
            'Place.regex'=>'Incorrect '

        ]);

        $bills = Water::where('MonthYear','=',$request->input('MonthYear'))->first();

        $bills ->MonthYear = $request->input('MonthYear');
        $bills ->Year = $request->input('Year');
        $bills ->Place = $request->input('Place');
        $bills ->PaymentMethod = $request->input('PaymentMethod');
        $bills ->Amount = $request->input('Amount');
        $bills ->PaidDate = $request->input('PaidDate');
        $bills->save();

       // dd($bills);
        return redirect("index");








    }


    public function destroy($MonthYear)
    {
        $bills =Water::where('MonthYear','=',$MonthYear);
        $bills->delete();
        return redirect("index");
    }
}
