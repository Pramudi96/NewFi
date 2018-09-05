<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('others', function (Blueprint $table) {

            $table->increments('Oid');
            $table->String('MonthYear');
            $table->String('Year');
            $table->String('Purpose');
            $table->String('Company');
            $table->String ('PaymentMethod');
            $table->float('Amount');
            $table->date('PaidDate');
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
        Schema::dropIfExists('others');
    }
}
