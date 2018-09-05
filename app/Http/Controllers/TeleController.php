<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pro;
use App\Tele;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\Authenticatable;
class TeleController extends Controller
{



    public function Tindex()
    {
        $waters = Tele::all();
        return View("Tdelete",compact("waters"));
    }

    public function Tsearch(Request $request)
    {

        $result = $this->validate($request,[
            'monthYear'=>['required','exists:waters,MonthYear'],
        ],[
            //'MonthYear.regex'=>'error message',
            'monthYear.exists'=>'Record Not Found',
        ]);


        $waters = Tele::where('MonthYear','=',$request->input('monthYear'))->get();
        return view("Tdelete",compact("waters"));


    }
    public function create()
    {
        return view("Telephone");
    }


    public function Tstore(Request $request)
    {

        $this->validate($request,[

            'MonthYear'=>['required','unique:Teles','regex:/[0-9a-zA-Z]+$/'],
            'Year'=>['required','regex:/^[0-9]+$/'],
            'Place'=>['required','regex:/^[a-zA-Z]+$/'],
            'PaymentMethod'=>'required',
            'Amount'=>'required',
        ],[

                'MonthYear.regex'=>'Invalid Format ',
                'Year.regex'=>'Incorrect',
                'Place.regex'=>'Incorrect'

        ]);


        $bills = new Tele();
        $bills ->MonthYear = Input::get('MonthYear');
        $bills ->Year = Input::get('Year');
        $bills ->Place = Input::get('Place');
        $bills ->PaymentMethod = Input::get('PaymentMethod');
        $bills ->Amount = Input::get('Amount');
        $bills ->PaidDate = Input::get('PaidDate');
        $bills->Save();



       return redirect("Tindex");
    }


    public function Tshow($id)
    {

    }


    public function Tedit($Tid)
    {
        $Teles =Tele::where('MonthYear','=',$Tid);
        //return view('TeleUpdate',compact('Teles'));
        return view('TelephoneUpdate',compact('Teles','Tid'));

    }


    public function Tupdate(Request $request)
    {

        $this->validate($request,[

            //'MonthYear'=>['required','unique:Teles','regex:/[0-9a-zA-Z]+$/'],
            'Year'=>['required','regex:/^[0-9]+$/'],
            'Place'=>['required','regex:/^[a-zA-Z]+$/'],
            'PaymentMethod'=>'required',
            'Amount'=>'required',
        ],[

            //'MonthYear.regex'=>'Invalid Format ',
            'Year.regex'=>'Incorrect',
            'Place.regex'=>'Incorrect'

        ]);
        $bills = Tele::where('MonthYear','=',$request->input('MonthYear'))->first();

        // $bills ->MonthYear = $request->input('MonthYear');
        $bills ->Year = $request->input('Year');
        $bills ->Place = $request->input('Place');
        $bills ->PaymentMethod = $request->input('PaymentMethod');
        $bills ->Amount = $request->input('Amount');
        $bills ->PaidDate = $request->input('PaidDate');
        $bills->save();

        //dd($bills);
        return redirect("Tindex");
    }


    public function Tdestroy($MonthYear)
    {
        $bills =Tele::where('MonthYear','=',$MonthYear);
        $bills->delete();
        return redirect("Tindex");
    }
}
