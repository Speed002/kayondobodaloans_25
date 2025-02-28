<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class DeleteClientIndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke($id)
    {
        $client = Client::find($id);
        return inertia()->modal('Client/DeleteClient', [
            'client' => $client
        ])->baseURL('client.show');
    }
}
