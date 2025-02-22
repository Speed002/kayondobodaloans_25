<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'initial_deposit',
        'weekly_deposit',
        'agreed_months',
        'total_weeks',
        'selling_price',
        'starting_week_date',
        'agreement_place',
        'common_set_key'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
