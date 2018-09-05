<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->String('MonthYear');
            $table->String('Year');
            $table->String('InventoryType');
            $table->String('Item');
            $table->String('Quantity');
            $table->String('Place');
            $table->String('InvoiceNumber');
            $table->String('FinancedDate');
            $table->String('Amount');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
