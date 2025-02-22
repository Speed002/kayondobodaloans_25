<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientShowController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function __invoke(Client $client, $key = null)
    {
        if($key){
            $common_key = $key;
        }
        // Load relationships normally
        $client->load(['motor', 'loan', 'referee']);
        // Apply filtering only if key is provided
        $filteredMotor = $key ? $client->motor()->where('common_set_key', $key)->get() : $client->motor;
        $filteredLoan = $key ? $client->loan()->where('common_set_key', $key)->get() : $client->loan;
        $filteredReferee = $key ? $client->referee()->where('common_set_key', $key)->get() : $client->referee;
        return inertia()->render('Client/Client', [
            'client' => ClientResource::make($client), // Keep the full client resource
            'filtered_motor' => $filteredMotor,
            'filtered_loan' => $filteredLoan,
            'filtered_referee' => $filteredReferee,
            'common_key' => $common_key ?? ''
        ]);
    }


}
