<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\AmqpCaster;

class billController extends Controller
{

    public function HomePage(){
        return View('home');
    }

    public function billPage(){

        return View('bill');
    }
    public function AcademicPage(){
        return view('Academic');
    }
    public function NonAcademicPage(){

        return View('Nonacademic');
    }

    public function WaterPage(){

        return View('water');
    }
    public function TelephonePage(){

        return View('Telephone');
    }
    public function ElectricPage(){

        return View('Electric');
    }
    public function OtherPage(){

        return View('Other');
    }
    public function StaffPage(){

        return View('Staff');
    }
    public function FundsPage(){

        return View('Funds');
    }

    public function AcademicSalary(){

        return View('AcademicSalary');
    }

    public function NonAcademicSalary(){

        return View('NonAcademicSalary');
    }

    public function WaterUpdate(){

        return View('WaterUpdate');
    }

    public function StudentFee(){

        return View('StudentFee');
    }

    public function MonthlyReport(){

        return View('MonthlyReport');
    }

    public function AnnualReport(){

        return View('AnnualReport');
    }

    public function LibraryRecord(){

        return View('LibraryRecord');
    }


    public function EventRecord(){

        return View('EventRecord');
    }

    public function ElectricUpdate(){

        return View('ElectricUpdate');
    }

    public function AcademicUpdate(){

        return View('AcademicUpdate');
    }

    public function NewTel(){

        return View('NewTele');
    }

    public function TFirst(){

        return View('TFirst');
    }
    public function Mtot(){

        return View('MTotalSum');
    }

    public function pp(){

        return View('All2');
    }

    public function budget(){

        return View('budget');
    }

    public function as3(){

        return View('as');
    }

    public function FF(){

        return View('MTotalSum');
    }

    public function reg(){

        return View('register');
    }



    public function vb(){

        return View('vb');
    }

    public function validation(Request $request){
        $this->validate($request,[

            'MonthYear'=>'required',
            'Place'=>'required',
            'Year'=>'required',
            'PaymentMethod'=>'required',
            'Amount'=>'required',
            'PaidDate'=>'required'


        ]);

        dd('validation Passes');
    }

}
