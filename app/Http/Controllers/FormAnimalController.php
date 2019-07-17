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
use Illuminate\Http\Request;
use test\Mockery\Stubs\Animal;

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
        $races = Race::all();
        $sizes = Size::all();
        $status = Statu::all();
        $types = Type::all();

        return view('forms/animals.index')
            ->with([
                'colors' => $colors,
                'colorEyes' => $colorEyes,
                'furSizes' => $furSizes,
                'genders' => $genders,
                'races' => $races,
                'sizes' => $sizes,
                'status' => $status,
                'types' => $types
            ]);
    }
}

