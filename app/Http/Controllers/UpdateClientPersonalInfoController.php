<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class UpdateClientPersonalInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(Request $request, $client, $field){
        //this function updates all the fields
        $client = Client::find($client);
        $client->$field = $request->$field; //same as: $client->[name] = $request->[name]
        $client->save();
        return back()->with('toast', $field .' updated successfully');
    }
}
