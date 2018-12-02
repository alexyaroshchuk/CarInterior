<?php

namespace App\Http\Controllers;

use App\Car;
use App\Client;
use App\Contracts;
use App\Employee;
use NumberFormatter;
use Illuminate\Http\Request;

class ContractsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contracts = Contracts::orderBy('contracts_id')->get();
        $client = Client::all();
        $car = Car::all();
        $employee = Employee::all();
        return view('/contracts.contracts',
            compact('client', 'contracts', 'employee', 'car'));
    }

    public function update(Request $request)
    {
        Contracts::where('contracts_id', $request['contracts'])->update([
            'car_id' => $request['car_id'],
            'client_id' => $request['client_id'],
            'employee_id' => $request['employee_id'],
            'start_of_contract' => $request['start_of_contract'],
            'end_of_contract' => $request['end_of_contract'],
            'price' => $request['price'],
        ]);
        return back();
    }

    public function insert(Request $request){
        $start_of_contract = $request['start_of_contract'];
        $end_of_contract = $request['end_of_contract'];
        $result = strtotime($start_of_contract)-strtotime($end_of_contract);
        $result = -$result/ (60 * 60 * 24);
        $car_cost = Car::where('car_id', $request['car_id'])->first()->car_cost;
        $cost = (int) filter_var($car_cost, FILTER_SANITIZE_NUMBER_INT);
        $result = $result*$cost;
        Contracts::create([
            'car_id' => $request['car_id'],
            'client_id' => $request['client_id'],
            'employee_id' => $request['employee_id'],
            'start_of_contract' => $request['start_of_contract'],
            'end_of_contract' => $request['end_of_contract'],
            'price' => $result." гр",
        ]);
        return back();
    }

    public function delete($contracts){
        $delMsg = Contracts::where('contracts_id', $contracts);
        $delMsg->delete();
        return back();
    }
}
