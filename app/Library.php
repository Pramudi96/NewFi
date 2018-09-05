<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $table ='libraries';
    protected $primaryKey = 'Lid';
    protected $fillable = ['MonthYear','Year','Type','TotAmount'];
}
