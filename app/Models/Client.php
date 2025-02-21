<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nin',
        'dob',
        'contact',
        'occupation',
        'residence',
        'stage_name',
        'date_of_agreement',
        'father_name',
        'father_contact',
        'mother_name',
        'mother_contact',
    ];

    public function motor(){
        return $this->hasMany(Motor::class);
    }

    public function referee(){
        return $this->hasMany(Referee::class);
    }

    public function loan(){
        return $this->hasMany(Loan::class);
    }
}
