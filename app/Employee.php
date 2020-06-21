<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\App\Employer;
use\App\JobTitle;

class Employee extends Model
{
    protected $fillable =['idEmp','nameEmp','idNational','jobTitle_id','employer_id'];

    public function employer(){

        return $this->belongsTo(Employer::class);
    }

    public function jobTitle(){

        return $this->belongsTo(JobTitle::class);
    }

}
