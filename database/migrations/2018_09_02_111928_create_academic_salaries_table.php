<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->String('EmpNo');
            $table->String('EmpName');
            $table->String('PayslipNo');
            $table->String('MonthYear');
            $table->String('receivedDate');
            $table->float('Salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academic_salaries');
    }
}
