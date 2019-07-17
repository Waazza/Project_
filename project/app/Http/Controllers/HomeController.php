<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $sliders = Animals::all()->orderBy('id', 'desc')->paginate(2);
        return view('home.index')->with('sliders', $sliders);

        //lien de redirection vers liste Animaux
        return view('list.index');
        //vers les cards
        return view('card.index');
        //vers l'inscription de l'utilisateur
        return view('forms/inscriptions.index');
        //vers l'enregistrement de l'animal
        return view('forms/animals.index');
    }
}
