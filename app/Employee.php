<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employee";

    protected $primaryKey = "employee_id";
    public $timestamps = false;

    protected $fillable = [
        'date_birth',
        'fullname',
        'salary'
    ];
}
