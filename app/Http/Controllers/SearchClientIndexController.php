<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Resources\ClientResource;

class SearchClientIndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(Request $request)
    {
        // setting the initial value of clients to empty array
        $clients = [];

        if($request->search){
            $clients = ClientResource::collection(Client::with(['motor', 'referee', 'loan'])->where('name', 'like', '%' . $request->search . '%')->get());
        }
        // Return clients only when there is a search query, otherwise return an empty array
        return inertia()->modal('Client/SearchClient', [
            'query' => (object) $request->query(),
            'clients' => $clients
        ])->baseURL('clients');
    }

}
