<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
    use \Illuminate\Auth\Authenticatable;

    protected $table ='waters';
    protected $primaryKey = 'Wid';
    protected $fillable = ['MonthYear','Year','Place','PaymentMethod','Amount','PaidDate'];
}
