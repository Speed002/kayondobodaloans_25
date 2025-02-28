<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class DeleteClientDocumentIndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke($id)
    {
        $motor = Motor::find($id);
        return inertia()->modal('Client/DeleteClone', [
            'motor' => $motor
        ])->baseURL('client.show', $motor->client->id);
    }
}
