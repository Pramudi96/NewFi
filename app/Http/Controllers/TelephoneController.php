<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Telephone;
use Illuminate\Support\Facades\Input;

class TelephoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Tindex()
    {
        $waters = Telephone::all();
        return View("Tdelete",compact("waters"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Tsearch(Request $request)
    {
        //Water::all();
        // return View('ret');

        /*$students = Water::all()->toArray();
        return View('index',compact('students'));*/

        $waters = Telephone::where('MonthYear','=',$request->input('MonthYear'))->get();
        return View("NewTele",compact("waters"));


    }

    public function create()
    {
        return view("Telephone");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Tstore(Request $request)
    {
        $bills = new Telephone();
        $bills ->MonthYear = Input::get('MonthYear');
        $bills ->Year = Input::get('Year');
        $bills ->Place = Input::get('Place');
        $bills ->PaymentMethod = Input::get('PaymentMethod');
        $bills ->Amount = Input::get('Amount');
        $bills ->PaidDate = Input::get('PaidDate');
        $bills->Save();
        return redirect("Tindex");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Tshow($id)
    {
        //
    }

    public function TSum(Request $request)
    {
        $waters = Telephone::where('Year','=',$request->input('Year'))->sum('Amount');
        //$total=0;
        //$total += $waters;
        //return $total;
        return $waters;





       // $waters = Telephone::all()->where('Year','=',$request->input('Year'));
        return View("vb",compact("waters"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Tedit($Tid)
    {
        $waters =Telephone::where('MonthYear','=',$Tid);
        //return view('WaterUpdate',compact('waters'));
        return view('WaterUpdate',compact('Tid'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function TUpdate(Request $request)
    {


        //dd($request->input('Year'));

        $bills = Telephone::where('MonthYear','=',$request->input('MonthYear'))->first();
        //dd($bills);
               $bills ->Year = $request->input('Year');
               $bills ->Place = $request->input('Place');
               $bills ->PaymentMethod = $request->input('PaymentMethod');
               $bills ->Amount = $request->input('Amount');
               $bills ->PaidDate = $request->input('PaidDate');
               $bills->save();

               //dd($bills);
               return redirect("Tindex");

               //return $this->refreshView();

           }

           /**
            * Remove the specified resource from storage.
            *
            * @param  int  $id
            * @return \Illuminate\Http\Response
            */
    public function Tdestroy($MonthYear)
    {
        $bills =Telephone::where('MonthYear','=',$MonthYear);
        $bills->delete();
        return redirect("index");
    }
}
