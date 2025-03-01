<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientIndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function __invoke(Request $request){
        if($request->query()){
            // dd($request->search);
            $clients = ClientResource::collection(Client::with(['motor', 'referee', 'loan'])->where('name', 'like', '%' . $request->search . '%')->get());
        }else{
            $clients = ClientResource::collection(Client::with(['motor', 'referee', 'loan'])->get());
        }
        return inertia()->render('Client/Clients', [
            'query' => (object) $request->query(),
            'clients' => $clients
        ]);
    }
}
