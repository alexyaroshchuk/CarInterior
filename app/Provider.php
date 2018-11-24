<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = "provider";

    protected $primaryKey = "provider_id";
    public $timestamps = false;

    protected $fillable = [
        'company_name',
        'full_name_of_provider',
        'telephone_number'
    ];
}
