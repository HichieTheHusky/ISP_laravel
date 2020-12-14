<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preke extends Model
{
    use HasFactory;

    public function uzsakymas()
    {
        return $this->belongsToMany(Uzsakymas::class, 'prekes_uzsakymas', 'fk_uzsakymas', 'fk_preke');
    }
}
