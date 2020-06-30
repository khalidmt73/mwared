<?php

namespace App;

use \App\Employer;
use \App\Employee;
use \App\JobTitle;
use \App\EmployerOther;



use Illuminate\Database\Eloquent\Model;

class Secondment extends Model
{
    protected $fillable = [
        'idEmp', 'employerOther_id', 'typeSecondment', 'year', 'dateSecondment', 'user_id',
        'noOther', 'dateOther', 'onCouncil', 'onSecretary', 'dateSecretary', 'onCollege', 'dateCollege', 'college_id',
        'employer_id', 'jobTitle_id'
    ];
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'idEmp', 'idemp');
    }
    public function employerOther()
    {
        return $this->belongsTo(EmployerOther::class, 'employerOther_id');
    }
}
