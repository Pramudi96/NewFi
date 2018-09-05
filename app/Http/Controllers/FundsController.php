<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pro;
use App\Funds;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\Authenticatable;
class FundsController extends Controller
{



    public function findex()
    {
        $waters = Funds::all();
        return View("Fdelete",compact("waters"));
    }

    public function fsearch(Request $request)
    {

        $result = $this->validate($request,[
            'monthYear'=>['required','exists:funds','regex:/^[a-zA-Z]+$/'],
        ],[
            'monthYear.exists'=>'Record Not Found',
        ]);


        $waters = Funds::where('monthYear','=',$request->input('monthYear'))->get();
        return view("Fdelete",compact("waters"));


    }
    public function create()
    {
        return view("funds");
    }


    public function fstore(Request $request)
    {

        $this->validate($request,[
            'FundNameMonthYear'=>['required','unique:funds','regex:/[0-9a-zA-Z]+$/'],
            'MonthYear'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'Year'=>['required','regex:/^[0-9]+$/'],
            'Donor'=>['required','regex:/^[a-zA-Z]+$/'],
            'ReceivedDate'=>'required',
            'ReceivedType'=>'required',
            'Amount'=>'required',
        ],[

            'FundName.regex'=>'Incorrect',
            'Donor.regex'=>'Incorrect',
            'MonthYear.regex'=>'Invalid Format ',
            'Year.regex'=>'Incorrect',



        ]);


        $bills = new Funds();
        $bills ->FundNameMonthYear = Input::get('FundNameMonthYear');
        $bills ->MonthYear = Input::get('MonthYear');
        $bills ->Year = Input::get('Year');
        $bills ->Donor = Input::get('Donor');
        $bills ->ReceivedDate = Input::get('ReceivedDate');
        $bills ->ReceivedType = Input::get('ReceivedType');

        $bills ->Amount = Input::get('Amount');

        $bills->Save();



        return redirect("findex");
    }


    public function Tshow($id)
    {

    }


    public function fedit($FundNo)
    {
        $Fundss =Funds::where('FundNameMonthYear','=',$FundNo);
        //return view('FundsUpdate',compact('Fundss'));
        return view('fundUpdate',compact('Fundss','FundNo'));

    }


    public function fupdate(Request $request)
    {


        $this->validate($request,[
            'FundNameMonthYear'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'MonthYear'=>['required','regex:/[0-9a-zA-Z]+$/'],
            'Year'=>['required','regex:/^[0-9]+$/'],
            'Donor'=>['required','regex:/^[a-zA-Z]+$/'],
            'ReceivedDate'=>'required',
            'ReceivedType'=>'required',
            'Amount'=>'required',
        ],[

            'FundName.regex'=>'Incorrect',
            'Donor.regex'=>'Incorrect',
            'MonthYear.regex'=>'Invalid Format ',
            'Year.regex'=>'Incorrect',



        ]);
        $bills = Funds::where('FundNameMonthYear','=',$request->input('FundNameMonthYear'))->first();

       // $bills->FundNameMonthYear =$request->input('FundNameMonthYear');
        $bills ->MonthYear = $request->input('MonthYear');
        $bills ->Year = $request->input('Year');
        $bills ->Donor = $request->input('Donor');
        $bills ->ReceivedDate = $request->input('ReceivedDate');
        $bills ->ReceivedType = $request->input('ReceivedType');
        $bills ->Amount = $request->input('Amount');
        
        $bills->save();

        //dd($bills);
        return redirect("findex");
    }


    public function fdestroy($FundNameMonthYear)
    {
        $bills =Funds::where('FundNameMonthYear','=',$FundNameMonthYear);
        $bills->delete();
        return redirect("findex");
    }
}
