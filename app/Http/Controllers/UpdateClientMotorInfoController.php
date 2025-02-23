<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class UpdateClientMotorInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(Request $request, $motor, $field){
        //this function updates all the fields
        $motor = Motor::find($motor);
        $motor->$field = $request->$field; //same as: $client->[name] = $request->[name]
        $motor->save();
        return back()->with('toast', $field .' updated successfully');
    }
}
