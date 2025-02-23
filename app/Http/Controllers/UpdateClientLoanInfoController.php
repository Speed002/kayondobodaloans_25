<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class UpdateClientLoanInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(Request $request, $loan, $field){
        //this function updates all the fields
        $loan = Loan::find($loan);
        $loan->$field = $request->$field; //same as: $client->[name] = $request->[name]
        $loan->save();
        return back()->with('toast', $field .' updated successfully');
    }
}
