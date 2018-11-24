<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $provider = Provider::orderBy('provider_id')->get();
        return view('/provider.provider',
            compact('provider'));
    }

    public function update(Request $request)
    {
        Provider::where('provider_id', $request['provider'])->update([
            'company_name' => $request['company_name'],
            'full_name_of_provider' => $request['full_name_of_provider'],
            'telephone_number' => $request['telephone_number'],
        ]);
        return back();
    }

    public function insert(Request $request){
        Provider::create([
            'company_name' => $request['company_name'],
            'full_name_of_provider' => $request['full_name_of_provider'],
            'telephone_number' => $request['telephone_number'],
        ]);
        return back();
    }

    public function delete($provider){
        $delMsg = Provider::where('provider_id', $provider);
        $delMsg->delete();
        return back();
    }
}
