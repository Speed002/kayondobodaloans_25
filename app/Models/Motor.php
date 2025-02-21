<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'make',
        'color',
        'chasis',
        'engine',
        'condition',
        'registration',
        'registered_names',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
