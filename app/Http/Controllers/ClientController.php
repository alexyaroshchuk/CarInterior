<?php

namespace App\Http\Controllers;

use App\Client;
use App\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $client = Client::orderBy('client_id')->get();
        return view('/client.client',
            compact('client'));
    }

    public function update(Request $request)
    {
        Client::where('client_id', $request['client'])->update([
            'driving_experience' => $request['driving_experience'],
            'fullname' => $request['fullname'],
        ]);
        return back();
    }

    public function insert(Request $request){
        $a='@gmail.com';
        $b=request('fullname');
        User::insert([
            'name' => $request['fullname'],
            'email' => $b.=$a,
            'password' => bcrypt('1'),
            'id_role' => 3
        ]);
        Client::create([
            'driving_experience' => $request['driving_experience'],
            'fullname' => $request['fullname'],
        ]);
        return back();
    }

    public function delete($client){
        $delMsg = Client::where('client_id', $client);
        $delMsg->delete();
        return back();
    }
}
