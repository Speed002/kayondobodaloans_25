<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(Request $request)
    {
        return inertia()->render('Dashboard', [
            'clients' => Client::all()->count(),
            'latest_client' => ClientResource::make($request->user()->client),
        ]);
    }
}
