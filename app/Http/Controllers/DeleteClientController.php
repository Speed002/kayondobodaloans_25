<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class DeleteClientController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke($id){
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('clients')->with('toast', 'You just removed a client');
    }
}
