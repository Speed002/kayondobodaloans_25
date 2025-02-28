<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Motor;
use App\Models\Referee;
use Illuminate\Http\Request;

class DeleteClientDocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke($id){
        $motor = Motor::find($id);
        $referee = Referee::where('common_set_key', $motor->common_set_key)->delete();
        $loan = Loan::where('common_set_key', $motor->common_set_key)->delete();
        $motor->delete();
        return redirect()->route('client.show', $motor->client->id)->with('toast', 'Document deleted');
    }
}
