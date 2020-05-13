<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Filmovi;

class FilmoviController extends Controller{

    public function index(){
        return view('movies.index')->with('filmovi', Filmovi::get());
    }

    public function add(){
        return view('movies.unos');
    }   

    public function store(Request $request){
        $errori = array(
        'naslov.required' => 'Polje Naziv dvorane je obvezno',
        );
        
        $data = $request->all();
        $noviFilm = new Filmovi;
        $noviFilm->naslov = $data['naslov'];
        $noviFilm->id_zanr = $data['id_zanr'];
        $noviFilm->godina = $data['godina'];
        $noviFilm->trajanje = $data['trajanje'];
        $noviFilm->slika = $data['slika'];
        $noviFilm->opis = $data['opis'];

        $noviFilm->save();
        return redirect()->action('FilmoviController@index')->with('success', 'Podatci su uspješno pohranjeni u bazu!');
    }
}
