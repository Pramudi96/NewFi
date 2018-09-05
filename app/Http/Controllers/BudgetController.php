<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Budget;

use Illuminate\Support\Facades\Input;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Bindex()
    {
        $waters = Budget::all();
        return View("Bbelete",compact("waters"));
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
    public function Bstore(Request $request)
    {
        $this->validate($request,[

            'TypeandYear'=>['required','unique:budgets','regex:/[0-9a-zA-Z]+$/'],
            'Year'=>['required','regex:/^[0-9]+$/'],
            'ExpectedAmount'=>'required',
        ],[

            'TypeandYear.regex'=>'Invalid Format ',
            'Year.regex'=>'Incorrect',


        ]);



        $bills = new Budget();
        $bills ->TypeandYear = Input::get('TypeandYear');
        $bills ->Year = Input::get('Year');
        $bills ->ExpectedAmount = Input::get('ExpectedAmount');
        $bills->Save();
        return redirect("Bindex");

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
        //
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
    public function destroy($TypeandYear)
    {

        $bills =Budget::where('TypeandYear','=',$TypeandYear);
        $bills->delete();
        return redirect("Bindex");
    }
}
