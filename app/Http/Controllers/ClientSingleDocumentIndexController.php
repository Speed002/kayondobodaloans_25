<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Motor;
use App\Models\Referee;
use Illuminate\Http\Request;

class ClientSingleDocumentIndexController extends Controller
{
    public function __invoke($client, $key)
    {
        // dd($client, $key);
        $motor = Motor::where('client_id', $client)->where('common_set_key', '=', $key)->get();
        $referee = Referee::where('client_id', $client)->where('common_set_key', '=', $key)->get();
        $loan = Loan::where('client_id', $client)->where('common_set_key', '=', $key)->get();
        return redirect()->route('client.show', ['motor'=>$motor,'referee'=> $referee, 'loan' => $loan]);
    }
}
