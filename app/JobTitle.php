<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model
{
    protected $table =['job_titles'];

    protected $fillable =['jobTitle'];


    public function employee(){

        return $this->belongsTo(Employee::class);
    }


}
