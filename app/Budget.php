<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use \Illuminate\Auth\Authenticatable;
    protected $table ='budgets';
    protected $fillable = ['TypeAndYear','Year','Amount'];
}
