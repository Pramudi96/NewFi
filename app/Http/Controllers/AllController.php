<?php

namespace App\Http\Controllers;
use App\Telephone;
use App\Electric;
use App\Water;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AllController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Aindex()
    {
        $waters = Water::all();
        return View("all",compact("waters"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('all');
    }


    public function ASum(Request $request)
    {
       $waters = Water::where('Year','=',$request->input('Year'))->sum('Amount');
       // $total=0;
        //$total += $waters;
       // return $total;

        return View('All2',compact('waters'));


       /* $waters = Water::all()->where('Year','=',$request->input('Year'));
        return View("delete",compact("waters"));*/


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
