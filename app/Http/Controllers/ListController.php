<?php

namespace App\Http\Controllers;

use App\Model\Age;
use App\Model\Animal;
use App\Model\Color;
use App\Model\ColorEyes;
use App\Model\FurSize;
use App\Model\Gender;
use App\Model\Race;
use App\Model\Size;
use App\Model\Type;
use Response;
use Illuminate\Http\Request;


class ListController extends Controller
{
    private $age;
    private $animals;
    private $tatoo;
    private $microship;
    private $collar;
    private $colors;
    private $colorsEyes;
    private $furSizes;
    private $genders;
    private $races;
    private $sizes;
    private $types;

    private $data;

    public function __construct()
    {
        $this->age = Age::all();
        $this->animals = Animal::all();
        $this->tatoo = Animal::get('tatoo');
        $this->microship = Animal::get('microship');
        $this->collar = Animal::all('collar');
        $this->colors = Color::all();
        $this->colorsEyes = ColorEyes::all();
        $this->furSizes = FurSize::all();
        $this->genders = Gender::all();
        $this->races = Race::all();
        $this->sizes = Size::all();
        $this->types = Type::all();


        $this->data = [
            'age' => $this->age,
            'animals' => $this->animals,
            'tatoo' => $this->tatoo,
            'microship' => $this->microship,
            'collar' => $this->collar,
            'colors' => $this->colors,
            'colorsEyes' => $this->colorsEyes,
            'furSizes' => $this->furSizes,
            'genders' => $this->genders,
            'races' => $this->races,
            'sizes' => $this->sizes,
            'types' => $this->types
        ];
    }

    public function index()
    {
            return view('list.index')
                ->with($this->data);
    }

    public function filter(Request $request, Animal $animal)
    {
//        dd($request);

        // newQuery() = Get a new query builder for the model's table.
        $animal = $animal->query()->join('races', 'races.id', '=', 'animals.race_id_fk');
        $data = $request->all();
        if (empty($request)) {
            return view('list.index')
                ->with($this->data);

        } else {
            $animal = $animal->addSelect('animals.*');
            $animal = $animal->leftJoin('sizes','sizes.id','=','animals.size_id_fk')->addSelect('sizes.id as sizes_id', 'sizes.label as sizes_label');
            $animal = $animal->leftJoin('ages','ages.id','=','animals.age_id_fk')->addSelect('ages.id as ages_id', 'ages.label as ages_label');;
            $animal = $animal->leftJoin('types','types.id','=','races.id_type_fk')->addSelect('types.id as types_id', 'types.label as types_label');
            $animal = $animal->leftJoin('colors','colors.id','=','animals.color_id_fk')->addSelect('colors.id as colors_id', 'colors.label as colors_label');;
            $animal = $animal->leftJoin('color_eyes','color_eyes.id','=','animals.color_eyes_id_fk')->addSelect('color_eyes.id as color_eyes_id', 'color_eyes.color_eyes as color_eyes_label');
            $animal = $animal->leftJoin('genders','genders.id','=','animals.gender_id_fk')->addSelect('genders.id as genders_id', 'genders.label as genders_label');;
            $animal = $animal->leftJoin('fur_sizes','fur_sizes.id','=','animals.fur_size_id_fk')->addSelect('fur_sizes.id as fur_sizes_id', 'fur_sizes.label as fur_sizes_label');;


            // Search for an animal based on their type.
            if ($request->has('types') && $request->input('types')!=-1) {
                $animal = $animal->where('race_id_fk', 'like', '%' . $request->input('types') . '%');
            }

            // Search for an animal based on their color.
            if ($request->has('colors') && $request->input('colors')!=-1) {
                $animal = $animal->where('color_id_fk', 'like', '%' . $data['colors'] . '%');
            }

            // Search for an animal based on their eyes color.
            if ($request->has('colorsEyes') && $request->input('colorsEyes')!=-1) {
                $animal = $animal = $animal->where('color_eyes_id_fk', 'like', '%' . $data['colorsEyes'] . '%');
            }

            // Search for an animal based on their microship.
            if ($request->has('microships') && $request->input('microships')!=-1) {
                $animal = $animal->where('microship', 'like', '%' . $data['microship'] . '%');
            }

            // Search for an animal based on their collar.
            if ($request->has('collars') && $request->input('collars')!=-1) {
                $animal = $animal->where('collar', 'like', '%' . $data['collar'] . '%');
            }

            // Search for an animal based on their gender.
            if ($request->has('genders') && $request->input('genders')!=-1) {
                $animal = $animal->where('gender_id_fk', 'like', '%' . $data['gender'] . '%');
            }

            // Search for an animal based on their size.
            if ($request->has('sizes') && $request->input('sizes')!=-1) {
                $animal = $animal->where('size_id_fk', 'like', '%' . $data['size'] . '%');
            }

            // Search for an animal based on their fur size
            if ($request->has('furSizes') && $request->input('furSizes')!=-1) {
                $animal = $animal->where('fur_size_id_fk', 'like', '%' . $data['furSize'] . '%');
            }

            // Search for an animal based on their age.
            if ($request->has('ages') && $request->input('ages')!=-1) {
                $animal = $animal->where('age_id_fk', 'like', '%' . $data['ages'] . '%');
            }


                $filteredAnimal = $animal->get();
                echo json_encode($filteredAnimal);
//              return response()->json($filteredAnimal);
            }
        }


    // Filter by search

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Function to search for an animal based on their name, tatoo, or race
     */


    public function search(Request $request, Animal $animal)
    {
        $animal = $animal->query()->join('races', 'races.id', '=', 'animals.race_id_fk' );
        $data = $request->all();

        if (empty($request)) {
            return view('list.index')
                ->with($this->data);

        } else {

            $animal = $animal->addSelect('animals.*')->join('races');

            $search = $request->get('search');
            if ($request->has('search') && $request->input('search') != -1) {
                $animal = $animal->where('animals.name', 'like', '%' . $search . '%')
                    ->orWhere('animals.tatoo', 'like', '%' . $search . '%')
                    ->get();
//                dd($animal);
            }

            return view('list.index')
                ->with($this->data)
                ->with(['animals' => $animal]);
        }
    }


    public function ajaxMapList()
    {
        $locAnimal = Animal::all();
        foreach ($locAnimal as $animal) {
            dd($animal->race());
        }

        return response()->json($locAnimal);
    }
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Function to search an animal by race
     */

//    public function race(Request $request)
//    {
//        $races = $request->get('race');
//        $animals = Race::where('label', 'like', '%' . $races . '%')->get();
//        //dd($animals);
//
//        return view('list.index')
//            ->with($this->data)
//            ->with(['animals' => $animals]);
//    }
}
