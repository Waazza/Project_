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
use App\Http\Requests;

use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
        $animal = $animal->newQuery();

        if (empty($request)) {
            return view('list.index')
                ->with($this->data);

        } else {

            // Search for an animal based on their name.
            if ($request->has('name')) {
                $animal->where('name', $request->input('name'));
            }

            // Search for an animal based on their race.
            if ($request->has('race')) {
                Race::where('label', $request->input('race'));
            }

            // Search for an animal based on their type.
            if ($request->has('type')) {
                $animal->where('race_id_fk', 'like', '%' . $request->input('type') . '%');
//            dd('toto');
            }

            // Search for an animal based on their color.
            if ($request->has('color')) {
                $animal->where('color_id_fk', 'like', '%' . $request->input('color') . '%');
            }

            // Search for an animal based on their eyes color.
            if ($request->has('eyes-color')) {
                $animal->where('color_eyes_id_fk', 'like', '%' . $request->input('eyes-color') . '%');
            }

            // Search for an animal based on their microship.
            if ($request->has('microship')) {
                $animal->where('microship', 'like', '%' . $request->input('microship') . '%');
            }

            // Search for an animal based on their collar.
            if ($request->has('collar')) {
                $animal->where('collar', 'like', '%' . $request->input('collar') . '%');
            }

            // Search for an animal based on their gender.
            if ($request->has('gender')) {
                $animal->where('gender_id_fk', 'like', '%' . $request->input('gender') . '%');
            }

            // Search for an animal based on their size.
            if ($request->has('size')) {
                $animal->where('size_id_fk', 'like', '%' . $request->input('size') . '%');
            }

            // Search for an animal based on their fur size
            if ($request->has('fur_size')) {
                $animal->where('fur_size_id_fk', 'like', '%' . $request->input('furSize') . '%');
            }

            // Search for an animal based on their age.
            if ($request->has('age')) {
                $animal->where('age_id_fk', 'like', '%' . $request->input('age') . '%');
            }

//            dd($animal->get());
//            return view('list.index')
//                ->with($this->data)
//                ->with(['animals' => $animal->get()]);
                $abc = ['data' => $this->data, 'bb' => $animal->get()];
                $filterAnimal = $animal->get();
                $array[] = json_decode(json_encode($filterAnimal), true);

//                dd($array);

                return response()->json($abc);
            }
        }


    // Filter by search

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Function to search an animal by name
     */


    public function search(Request $request)
    {
        $search = $request->get('search');
        $animals = Animal::where('name', 'like', '%' . $search . '%')
                        ->orWhere('tatoo', 'like', '%' .$search. '%')->get();
        //dd($animals);

        return view('list.index')
            ->with($this->data)
            ->with(['animals' => $animals]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Function to search an animal by race
     */

    public function race(Request $request)
    {
        $races = $request->get('race');
        $animals = Race::where('label', 'like', '%' . $races . '%')->get();
        //dd($animals);

        return view('list.index')
            ->with($this->data)
            ->with(['animals' => $animals]);
    }

    public function ajaxMapList()
    {
        $locAnimal = Animal::all();
        foreach ($locAnimal as $animal) {
            dd($animal->race());
        }

        return response()->json($locAnimal);
    }
}
