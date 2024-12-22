<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilmFormRequest;
use App\Models\Cinema\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    // Afficher les films
    public function index()
    {
        $films = Film::latest('created_at')->get();
        return view('cinema.films.index', compact('films'));
    }

    // Formulaire d'ajout
    public function create()
    {
        return view('cinema.films.create');
    }

    // Enregistrer un film
    public function store(FilmFormRequest $request)
    {
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $path = $image->storeAs('public/images', time().'.'.$image->getClientOriginalExtension());
        }
        Film::create([
            'title' => $request->title,
            'image' => $path,
            'date_heure_diffusion' => $request->date_heure_diffusion,
            'ticket_price' => $request->ticket_price,
        ]);
        return redirect()->route('films.index')->with('success','Film publié avec succès.');
    }
}
