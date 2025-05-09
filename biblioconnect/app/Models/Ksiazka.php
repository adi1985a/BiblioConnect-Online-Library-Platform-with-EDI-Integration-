<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ksiazka extends Model
{
    protected $fillable = [
        'tytul', 'autor', 'rok_wydania', 'kategoria', 'dostepnosc', 'sciezka_do_miniatury', 'status_wypozyczenia'
    ];

}


