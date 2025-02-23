<?php

namespace App\Http\Controllers;

use App\Models\Referee;
use Illuminate\Http\Request;

class UpdateClientRefereeInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(Request $request, $referee, $field){
        //this function updates all the fields
        $referee = Referee::find($referee);
        $referee->$field = $request->$field; //same as: $client->[name] = $request->[name]
        $referee->save();
        return back()->with('toast', $field .' updated successfully');
    }
}
