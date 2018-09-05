<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Pro extends Model implements Authenticatable
{
        use \Illuminate\Auth\Authenticatable;
}
