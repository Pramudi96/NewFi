<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table ='events';
    protected $primaryKey = 'Eventid';
    protected $fillable = ['EventName','MonthYear','Year','TExpence','TIncome'];
}
