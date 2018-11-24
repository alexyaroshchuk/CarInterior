<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
   protected $table = "car";
   protected $primaryKey = "car_id";
   public $timestamps = false;
    protected $fillable = [
        'capacity',
        'body_type',
        'car_cost',
        'colour',
        'daily_cost',
        'free_or_rented_out',
        'mark',
        'model',
        'provider_id',
        'year_of_issue',
    ];

    public function provider(){
        return $this->hasMany("App\Provider", 'provider_id', 'provider_id');
    }

}
