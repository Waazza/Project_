<?php

namespace App\Http\Controllers;

use App\Model\Gender;
use App\Model\Color;
use App\Model\ColorEyes;
use App\Model\FurSize;
use App\Model\Race;
use App\Model\Size;
use App\Model\Statu;
use App\Model\Type;


class FormAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::all();
        $colorEyes = ColorEyes::all();
        $furSizes = FurSize::all();
        $genders = Gender::all();
        $sizes = Size::all();
        $status = Statu::all();
        $types = Type::all();
        $dogs = Race::all()->where('type_id_fk', 1);
        $cats = Race::all()->where('type_id_fk', 2);
        $nacs = Race::all()->where('type_id_fk', 3);

        return view('forms/animals.index')
            ->with([
                'colors'   =>  $colors,
                'colorEyes'   =>  $colorEyes,
                'furSizes'   =>  $furSizes,
                'genders'   =>  $genders,
                'sizes'   =>  $sizes,
                'status'   =>  $status,
                'types' => $types,
                'dogs'   =>  $dogs,
                'cats'   =>  $cats,
                'nacs'   =>  $nacs
            ]);
    }

}

