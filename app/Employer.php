<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\App\Employee;
class Employer extends Model
{
    protected $fillable =['employer'];

    public function employee(){

        return $this->belongsTo(Employee::class);
    }

}
