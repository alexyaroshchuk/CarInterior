<?php

namespace App\Http\Controllers;

use App\Car;
use App\Provider;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $car = Car::orderBy('car_id')->get();
        $provider = Provider::all();
        return view('/car.car',
            compact('car', 'provider'));
    }

    public function update(Request $request)
    {
        Car::where('car_id', $request['car'])->update([
                'body_type' => $request['body_type'],
                'capacity' => $request['capacity'],
                'car_cost' => $request['car_cost'],
                'colour' => $request['colour'],
                'daily_cost' => $request['daily_cost'],
                'free_or_rented_out' => $request['free_or_rented_out'],
                'mark' => $request['mark'],
                'model' => $request['model'],
                'provider_id' => $request['provider_id'],
                'year_of_issue' => $request['year_of_issue']
        ]);
        return back();
    }

    public function insert(Request $request){
        Car::create([
            'capacity' => $request['capacity'],
            'body_type' => $request['body_type'],
            'car_cost' => $request['car_cost'],
            'colour' => $request['colour'],
            'daily_cost' => $request['daily_cost'],
            'free_or_rented_out' => $request['free_or_rented_out'],
            'mark' => $request['mark'],
            'model' => $request['model'],
            'provider_id' => $request['provider_id'],
            'year_of_issue' => $request['year_of_issue']
        ]);
        return back();
    }

    public function delete($car){
        $delMsg = Car::where('car_id', $car);
        $delMsg->delete();
        return back();
    }
}
