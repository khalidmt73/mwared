<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Employer;
use \App\JobTitle;

class Employee extends Model
{
    protected $fillable = ['idEmp', 'nameEmp', 'idNational', 'employer_id', 'jobTitle_id'];

    public function employer()
    {

        return $this->belongsTo(Employer::class, 'employer_id');
    }

    public function jobTitle()
    {

        return $this->belongsTo(JobTitle::class, 'jobTitle_id');
    }
}
