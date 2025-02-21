<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    use HasFactory;

    protected $fillable = [
        'referee_one_name',
        'referee_one_contact',
        'referee_one_relationship',
        'referee_two_name',
        'referee_two_contact',
        'referee_two_relationship',
        'stage_chairperson_name',
        'stage_chairperson_contact',
        'lc_chairperson_name',
        'lc_chairperson_contact',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
