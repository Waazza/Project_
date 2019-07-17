<?php

namespace App\Http\Controllers;

use App\Model\Animal;
use App\Model\Race;
use Illuminate\Http\Request;

class AddAnimalController extends Controller
{
    public function store(Request $request)
    {
        if (!is_null($request->dogRace)){
            $dataRace = $request->dogRace;
        }
        if (!is_null($request->catRace)){
            $dataRace = $request->catRace;
        }
        if (!is_null($request->nacRace)){
            $dataRace = $request->nacRace;
        }

        $race = Race::where('label', $dataRace)->get('id');
        $animal = new Animal();

        if ($request->has('name')){
            $animal->name = $request->name;
        }
        if ($request->has('picture')){
            $animal->picture = $request->picture;
        }
        if ($request->has('tatoo')){
            $animal->tatoo = $request->tatoo;
        }
        if ($request->has('microship')){
            $animal->microship = $request->microship;
        }
        if ($request->has('collar')){
            $animal->collar = $request->collar;
        }
        if ($request->has('comment')){
            $animal->comment = $request->comment;
        }

        $animal->status_id_fk = 3;

        if ($request->has('gender')){
            $animal->gender_id_fk = $request->gender;
        }
        if ($request->has('age')){
            $animal->age_id_fk = $request->age;
        }
        if ($request->has('color')){
            $animal->color_id_fk = $request->color;
        }
        if ($request->has('eyesColor')){
            $animal->color_eyes_id_fk = $request->eyesColor;
        }
        if ($request->has('size')){
            $animal->size_id_fk = $request->size;
        }
        if ($request->has('furSize')){
            $animal->fur_size_id_fk = $request->furSize;
        }
        if (!is_null($request->dogRace)){
            $animal->race_id_fk = $race[0]->id;
        }
        if (!is_null($request->catRace)){
            $animal->race_id_fk = $race[0]->id;
        }
        if (!is_null($request->nacRace)){
            $animal->race_id_fk = $race[0]->id;
        }
        if(!is_null($request->long) && !is_null($request->lat)){
            $animal->localisation = [$request->long, $request->lat];
        }

        $animal->save();

        $animal = Animal::all();
        return view('list.index')->with('animals', $animal);


    }
}
