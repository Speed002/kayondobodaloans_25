<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientCloneIndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(Client $client)
    {
        $client->load(['motor']); //Eager loading the relationships['motor'] and any other
        return inertia()->modal('Client/Clone', [
            'client' => ClientResource::make($client)
        ])->baseRoute('clients');
    }
}
