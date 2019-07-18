<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Animal;

class CardController extends Controller
{
    public function index($id){

        $animals = Animal::all();
        foreach ($animals as $animal) {
            $ages = $animal->age->label;
            $colorsEyes = $animal->colorEyes->label;
            $colors = $animal->color->label;
            $furSizes = $animal->furSize->label;
            $races = $animal->race->label;
            $sizes = $animal->size->label;
            $status = $animal->statu->label;
        }

        $singleAnimal = Animal::where('id', $id)->first();
        return view('card.index')
                ->with(['animals' => $animals])
                ->with(['singleAnimal' => $singleAnimal])
                ->with(['ages' => $ages])
                ->with(['colors' => $colors])
                ->with(['colorsEyes' => $colorsEyes])
                ->with(['furSizes' => $furSizes])
                ->with(['races' => $races])
                ->with(['sizes' => $sizes])
                ->with(['status' => $status]);
    }

}
