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

class YearController extends Controller
{
    public function Yindex(Request $request)
    {
        $this->validate($request,[


            'Year'=>['required','regex:/^[0-9]+$/']

        ],[


            'Year.regex'=>'Invalid Format'


        ]);
        $T = Tele::where('Year', '=', $request->input('Year'))->sum('Amount');
        $W = Water::where('Year', '=', $request->input('Year'))->sum('Amount');
        $E = Electric::where('Year', '=', $request->input('Year'))->sum('Amount');
        $Event = Event::where('Year', '=', $request->input('Year'))->sum('TExpence');
        $other = Other::where('Year', '=', $request->input('Year'))->sum('Amount');
        $Nonacademic = NonAcademicSalary::where('Year', '=', $request->input('Year'))->sum('Salary');
        $Tot1 = $W+$E+$T+$Event+$Nonacademic ;

        $Library = Library::where('Year', '=', $request->input('Year'))->sum('TotAmount');
        $student = Student::where('Year', '=', $request->input('Year'))->sum('Total');
        $funds =Funds::where('Year', '=', $request->input('Year'))->sum('Amount');
        $Event1 = Event::where('Year', '=', $request->input('Year'))->sum('TIncome');

        $Tot2 = $Library+$student+$other+$Event1+$funds;


        $Budget = $Tot1-$Tot2;

        return view('YearTotalSum',compact('T','W','E','Event','Nonacademic','Library','student','funds','Event1','other','Tot1','Tot2','Budget'));

    }







}
