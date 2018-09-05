<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pro;
use App\Electric;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\Authenticatable;
class ElectricController extends Controller
{



    public function eindex()
    {
        $Electrics = Electric::all();
        return View("edelete",compact("Electrics"));
    }

    public function esearch(Request $request)
    {
        $result = $this->validate($request,[
            'monthYear'=>['required','exists:electrics,MonthYear','regex:/^[a-zA-Z]+$/'],
        ],[
            //'monthYear.regex'=>'error message',
            'monthYear.exists'=>'Record Not Found',
        ]);

        $Electrics = Electric::where('monthYear','=',$request->input('monthYear'))->get();
        return view("edelete",compact("Electrics"));


    }
    public function create()
    {
        return view("Electric");
    }


    public function estore(Request $request)
    {

        $this->validate($request,[

            'MonthYear'=>['required','unique:Electrics','regex:/[0-9a-zA-Z]+$/'],
            'Year'=>['required','regex:/^[0-9]+$/'],
            'Place'=>['required','regex:/^[a-zA-Z]+$/'],
            'PaymentMethod'=>'required',
            'Amount'=>'required',
        ],[

            'MonthYear.regex'=>'Invalid Format ',
            'Year.regex'=>'Incorrect',
            'Place.regex'=>'Incorrect '

        ]);


        $bills = new Electric();
        $bills ->MonthYear = Input::get('MonthYear');
        $bills ->Year = Input::get('Year');
        $bills ->Place = Input::get('Place');
        $bills ->PaymentMethod = Input::get('PaymentMethod');
        $bills ->Amount = Input::get('Amount');
        $bills ->PaidDate = Input::get('PaidDate');
        $bills->Save();



        return redirect("eindex");
    }


    public function Eshow($id)
    {

    }


    public function Eedit($Eid)
    {
        $Electrics =Electric::where('MonthYear','=',$Eid);
        //return view('ElectricUpdate',compact('Electrics'));
        return view('ElectricUpdate',compact('Electrics','Eid'));

    }


    public function eupdate(Request $request)
    {


        $this->validate($request,[

           // 'MonthYear'=>['required','unique:Teles','regex:/[0-9a-zA-Z]+$/'],
            'Year'=>['required','regex:/^[0-9]+$/'],
            'Place'=>['required','regex:/^[a-zA-Z]+$/'],
            'PaymentMethod'=>'required',
            'Amount'=>'required',
        ],[

           // 'MonthYear.regex'=>'Invalid Format ',
            'Year.regex'=>'Incorrect',
            'Place.regex'=>'Incorrect'

        ]);





        $bills = Electric::where('MonthYear','=',$request->get('MonthYear'))->first();

        //$bills ->MonthYear = $request->input('MonthYear');
        $bills ->Year = $request->input('Year');
        $bills ->Place = $request->input('Place');
        $bills ->PaymentMethod = $request->input('PaymentMethod');
        $bills ->Amount = $request->input('Amount');
        $bills ->PaidDate = $request->input('PaidDate');
        $bills->save();

        //dd($bills);
        return redirect("eindex");
    }


    public function edestroy($MonthYear)
    {
        $bills =Electric::where('MonthYear','=',$MonthYear);
        $bills->delete();
        return redirect("eindex");
    }
}
