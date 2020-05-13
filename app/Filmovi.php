<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmovi extends Model
{
    protected $fillable = ['naslov','godina','trajanje','slika','opis'];
    public $timestamps = false;
}
