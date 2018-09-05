<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NonAcademicSalary extends Model
{
    use \Illuminate\Auth\Authenticatable;
    protected $table ='non_academic_salaries';
    protected $primaryKey = 'id';
    protected $fillable = ['EmpNo','EmpName','Designation','PayslipNo','MonthYear','Year','ReceivedDate','Salary'];
}
