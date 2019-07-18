<?php

namespace App\Http\Controllers;

use App\Model\Color;
use App\Model\ColorEyes;
use App\Model\FurSize;
use App\Model\Gender;
use App\Model\Race;
use App\Model\Size;
use App\Model\Statu;
use App\Model\Type;
use Illuminate\Http\Request;

class MonCompteController extends Controller
{
    public function index()
    {
        return view('monCompte.dashboard');
    }

    public function form()
    {
        $colors = Color::all();
        $colorEyes = ColorEyes::all();
        $furSizes = FurSize::all();
        $dogs = Race::all()->where('type_id_fk', 1);
        $cats = Race::all()->where('type_id_fk', 2);
        $nacs = Race::all()->where('type_id_fk', 3);
        $genders = Gender::all();
        $sizes = Size::all();
        $status = Statu::all();
        $types = Type::all();

        return view('monCompte.addAnimal')
            ->with([
                'colors'   =>  $colors,
                'colorEyes'   =>  $colorEyes,
                'furSizes'   =>  $furSizes,
                'dogs'   =>  $dogs,
                'cats'   =>  $cats,
                'nacs'   =>  $nacs,
                'genders'   =>  $genders,
                'sizes'   =>  $sizes,
                'status'   =>  $status,
                'types' => $types
            ]);
    }
}
