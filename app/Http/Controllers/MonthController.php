<?php

namespace App\Http\Controllers;
use App\Electric;
use App\Funds;
use App\NonAcademicSalary;
use App\Tele;
use App\Water;
use App\Event;
use App\Library;
use App\Student;
use App\Other;
use Illuminate\Http\Request;

class MonthController extends Controller
{


    public function Mindex(Request $request)

     {



         $this->validate($request,[

             'MonthYear'=>['required','regex:/[0-9a-zA-Z]+$/'],

         ],[

             'MonthYear.regex'=>'Invalid Format ',


         ]);
        // $waters = Electric::all();
         $T = Tele::where('MonthYear', '=', $request->input('MonthYear'))->sum('Amount');
         $W = Water::where('MonthYear', '=', $request->input('MonthYear'))->sum('Amount');
         $E = Electric::where('MonthYear', '=', $request->input('MonthYear'))->sum('Amount');
         $Nonacademic = NonAcademicSalary::where('MonthYear', '=', $request->input('MonthYear'))->sum('Salary');
         $Tot1 = $W+$E+$T+$Nonacademic;


         $Library = Library::where('MonthYear', '=', $request->input('MonthYear'))->sum('TotAmount');

         $other = Other::where('MonthYear', '=', $request->input('MonthYear'))->sum('Amount');
         $Event1 = Event::where('MonthYear', '=', $request->input('MonthYear'))->sum('TIncome');
         $funds =Funds::where('MonthYear', '=', $request->input('MonthYear'))->sum('Amount');
         $Tot2 = $Library+$other+$Event1;


         return view('MonthTotalSum',compact('T','W','E','Nonacademic','Tot','Library','funds','student','other','Event1','Tot1','Tot2'));
         //dd($T);
         //return view('YearTotalSum',compact('T','W','E'));

     }


    public function MIncome(Request $request)
    {
        // $waters = Electric::all();
        $Library = Library::where('MonthYear', '=', $request->input('MonthYear'))->sum('TotAmount');

        $other = Other::where('MonthYear', '=', $request->input('MonthYear'))->sum('Amount');
        $Event1 = Event::where('MonthYear', '=', $request->input('MonthYear'))->sum('TIncome');

        $Tot = $Library+$other+$Event1;
        //dd($T);
        return view('MonthlyIncome',compact('Library','student','other','Event1','Tot'));

    }















}
