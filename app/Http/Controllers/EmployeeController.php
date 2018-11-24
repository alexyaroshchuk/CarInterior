<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employee = Employee::orderBy('employee_id')->get();
        return view('/employee.employee',
            compact('employee'));
    }

    public function update(Request $request)
    {
        Employee::where('employee_id', $request['employee'])->update([
            'date_birth' => $request['date_birth'],
            'fullname' => $request['fullname'],
            'salary' => $request['salary'],
        ]);
        return back();
    }

    public function insert(Request $request){
        Employee::create([
            'date_birth' => $request['date_birth'],
            'fullname' => $request['fullname'],
            'salary' => $request['salary'],
        ]);
        return back();
    }

    public function delete($employee){
        $delMsg = Employee::where('employee_id', $employee);
        $delMsg->delete();
        return back();
    }
}
