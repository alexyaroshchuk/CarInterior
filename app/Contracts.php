<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    protected $table = "contracts";

    protected $primaryKey = "contracts_id";

    public $timestamps = false;

    protected $fillable = [
        'client_id',
        'employee_id',
        'car_id',
        'start_of_contract',
        'end_of_contract',
        'price'
    ];

    public function employee()
    {
        return $this->hasMany("App\Employee", 'employee_id', 'employee_id');
    }

    public function client()
    {
        return $this->hasMany("App\Client", 'client_id', 'client_id');
    }
    public function car()
    {
        return $this->hasMany("App\Car", 'car_id', 'car_id');
    }
}
