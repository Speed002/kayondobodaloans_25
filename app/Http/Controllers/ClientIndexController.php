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
    public function __invoke(){
        return inertia()->render('Client/Clients', [
            // 'clients' => ClientResource::collection(Client::with(['motor', 'referee', 'loan'])->get())
        ]);
    }
}
