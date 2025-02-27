<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Loan;
use App\Models\Motor;
use App\Models\Referee;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFDownloadController extends Controller
{
    public function generateEnglishPDF($motor)
    {
        $motor = Motor::find($motor);
        $key = $motor->common_set_key;
        $pdf = PDF::loadview('pdf.english', [
            'client' => $motor->client,
            'motor' => $motor,
            'referee' => Referee::where('common_set_key', $key)->first(),
            'loan' => Loan::where('common_set_key', $key)->first()
        ]);
        return $pdf->download($motor->client->name.'-english-agreement.pdf');
    }
    public function generateLugandaPDF($motor)
    {
        $motor = Motor::find($motor);
        $key = $motor->common_set_key;
        $pdf = PDF::loadview('pdf.luganda', [
            'client' => $motor->client,
            'motor' => $motor,
            'referee' => Referee::where('common_set_key', $key)->first(),
            'loan' => Loan::where('common_set_key', $key)->first()
        ]);
        return $pdf->download($motor->client->name.'-luganda-agreement.pdf');
    }
    public function generateTakeOverForm($motor){
        $motor = Motor::find($motor);
        $key = $motor->common_set_key;
        $pdf = PDF::loadview('pdf.take_over_form', [
            'client' => $motor->client,
            'motor' => $motor,
            'loan' => Loan::where('common_set_key', $key)->first()
        ]);
        return $pdf->download($motor->client->name.'-take-over-form.pdf');
    }
    public function generateOnlineHirerForm($motor){
        $motor = Motor::find($motor);
        $key = $motor->common_set_key;
        $pdf = PDF::loadview('pdf.online_hirer_form', [
            'client' => $motor->client,
            'motor' => $motor,
            'referee' => Referee::where('common_set_key', $key)->first(),
            'loan' => Loan::where('common_set_key', $key)->first()
        ]);
        return $pdf->download($motor->client->name.'-online-hirer-form.pdf');
    }
}
