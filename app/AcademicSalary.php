<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicSalary extends Model
{
    use \Illuminate\Auth\Authenticatable;
    protected $table ='academic_salaries';
    protected $primaryKey = 'id';
    protected $fillable = ['EmpNo','EmpName','PaySlipNo','MonthYear','ReceivedDate','Salary'];
}
