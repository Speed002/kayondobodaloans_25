<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientCloneStoreRequest;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientCloneStoreController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(ClientCloneStoreRequest $request)
    {
        // Find the client
        $client = Client::findOrFail($request->id);
        // Clone motor
        $motor = $client->motor()->first(); // Get the motor instance
        if ($motor) {
            $newMotor = $motor->replicate(); // Clone motor
            $newMotor->registration = $request->registration; // Set new registration
            $newMotor->client_id = $client->id; // Associate with client
            $newMotor->save();
        }
        // Clone referee
        $referee = $client->referee()->first(); // Get the referee instance
        if ($referee) {
            $newReferee = $referee->replicate();
            $newReferee->client_id = $client->id;
            $newReferee->save();
        }
        // Clone loan
        $loan = $client->loan()->first(); // Get the loan instance
        if ($loan) {
            $newLoan = $loan->replicate();
            $newLoan->client_id = $client->id;
            $newLoan->save();
        }

        return back()->with('toast', 'Successfully cloned ' . $client->name);
    }

}
