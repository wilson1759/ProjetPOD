<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'cni',
        'repas',
        'complement',
        'jour',
        'heure',
        'plat',
        'paiement',
    ];
}
