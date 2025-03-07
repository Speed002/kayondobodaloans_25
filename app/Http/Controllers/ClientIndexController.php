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
    public function __invoke(Request $request)
    {
        $query = Client::with(['motor', 'referee', 'loan']);

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Reset to page 1 if searching
        $page = $request->has('search') ? 1 : $request->input('page', 1);

        $clients = $query->paginate(12, ['*'], 'page', $page); // Force page reset if searching

        return inertia()->render('Client/Clients', [
            'query' => (object) $request->query(),
            'clients' => ClientResource::collection($clients)->response()->getData(true)
        ]);
    }


}
