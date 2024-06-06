<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'standing',
        'cni',
        'arrivee',
        'depart',
        'chambre',
    ];
}
