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

    public function index(){
        return view('list.index')
            ->with($this->data);
    }

    public function search(Request $request, Animal $animal){

        $animal = $animal->newQuery();

        $search = $request->get('search');
        $races = $request->get('race');
        $types = $request->get('type');
        $colorEyes = $request->get('eyes-color');
        $color = $request->get('color');
        $tatoo = $request->get('tatoo');
        $microship = $request->get('microship');
        $collar = $request->get('collar');
        $gender = $request->get('gender');
        $size = $request->get('size');
        $furSize = $request->get('fur-size');
        $age = $request->get('age');

//        $race = Race::where('id', 'like', '%'.$races.'%')->get();
//        $animals = Animal::where([
////                                ['name', 'like', '%'.$search.'%'],
////                                ['race_id_fk', 'like', '%'.$types.'%'],
////                                ['color_eyes_id_fk', 'like', '%'.$colorEyes.'%'],
////                                ['color_id_fk', 'like', '%'.$color.'%'],
////                                ['tatoo', 'like', '%'.$tatoo.'%'],
////                                ['microship', 'like', '%'.$microship.'%'],
////                                ['collar', 'like', '%'.$collar.'%'],
////                                ['gender_id_fk', 'like', '%'.$gender.'%'],
////                                ['size_id_fk', 'like', '%'.$size.'%'],
////                                ['fur_size_id_fk', 'like', '%'.$furSize.'%'],
////                                ['age_id_fk', 'like', '%'.$age.'%']
////                                ])->get();

       //dd($animals);


        // Search for a user based on their name.
        if ($request->has('name')) {
            $animal->where('name', $request->input('name'));
        }

        if ($request->has('race')) {
            Race::where('name', $request->input('race'));
        }

        if ($request->has('type')) {
            $animal->where('race_id_fk', 'like', '%'.$request->input('type').'%');
//            dd('toto');
        }

        if ($request->has('color')) {
            $animal->where('color_id_fk', 'like', '%'.$request->input('color').'%');
        }

        if ($request->has('eyes-color')) {
            $animal->where('color_eyes_id_fk', 'like', '%'.$request->input('eyes-color').'%');
        }

        if ($request->has('tatoo')) {
            $animal->where('tatoo', 'like', '%'.$request->input('tatoo').'%');
        }

        if ($request->has('microship')) {
            $animal->where('microship', 'like', '%'.$request->input('microship').'%');
        }

        if ($request->has('collar')) {
            $animal->where('collar', 'like', '%'.$request->input('collar').'%');
        }

        if ($request->has('gender')) {
            $animal->where('gender_id_fk', 'like', '%'.$request->input('gender').'%');
        }

        if ($request->has('size')) {
            $animal->where('size_id_fk', 'like', '%'.$request->input('size').'%');
        }

        if ($request->has('fur_size')) {
            $animal->where('fur_size_id_fk', 'like', '%'.$request->input('furSize').'%');
        }

        if ($request->has('age')) {
            $animal->where('age_id_fk', 'like', '%'.$request->input('age').'%');
        }

        return  $animal->get();
//        return view('list.index')
//            ->with(Animal::get())
//            ->with($this->data)
//         ->with(['animals' => $animals])
//            ->with(['race' => $race]);
    }

//    // Filter by search
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     * Function to search an animal by name
//     */
//
//
//
//    public function search(Request $request){
//        $search = $request->get('search');
//        $animals = Animal::where('name', 'like', '%'.$search.'%')->get();
//       //dd($animals);
//
//        return view('list.index')
//            ->with($this->data)
//            ->with(['animals' => $animals]);
//    }
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     * Function to search an animal by race
//     */
//
//    public function race(Request $request){
//        $races = $request->get('race');
//        $animals = Race::where('id', 'like', '%'.$races.'%')->get();
//        //dd($animals);
//
//        return view('list.index')
//            ->with($this->data)
//            ->with(['animals' => $animals]);
//    }
//
//    // Filter by select
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     * Function to filter animals by type
//     */
//
//    public function filterType(Request $request){
//        $types = $request->get('type');
//        $animals = Animal::where('race_id_fk', 'like', '%'.$types.'%')->get();
//
//        return view('list.index')
//            ->with($this->data)
//            ->with(['animals' => $animals]);
//    }
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     * Function to filter animals by eyes color
//     */
//
//    public function filterColorEyes(Request $request){
//        $colorEyes = $request->get('eyes-color');
//        $animals = Animal::where('color_eyes_id_fk', 'like', '%'.$colorEyes.'%')->get();
//
//        return view('list.index')
//            ->with($this->data)
//            ->with(['animals' => $animals]);
//    }
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     * Function to filter animals by color
//     */
//
//    public function filterColor(Request $request){
//        $color = $request->get('color');
////        $color = Input::get('color');
//        $animals = Animal::where('color_id_fk', 'like', '%'.$color.'%')->get();
//
////        dd($color);
////        dd($filterColor);
//        return view('list.index')
//            ->with($this->data)
//            ->with(['animals' => $animals]);
//    }
//
//    // Filter by check radio
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     * Function to filter animals by tatoo
//     */
//
//    public function filterTatoo(Request $request){
//        $tatoo = $request->get('tatoo');
//        $animals = Animal::where('tatoo', 'like', '%'.$tatoo.'%')->get();
//
//        return view('list.index')
//            ->with($this->data)
//            ->with(['animals' => $animals]);
//    }
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     * Function to filter animals by micrsohip
//     */
//
//    public function filterMicroship(Request $request){
//        $microship = $request->get('microship');
//        $animals = Animal::where('microship', 'like', '%'.$microship.'%')->get();
//
//
//        return view('list.index')
//            ->with($this->data)
//            ->with(['animals' => $animals]);
//    }
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     * Function to filter animals by collar
//     */
//
//    public function filterCollar(Request $request){
//        $collar = $request->get('collar');
//        $animals = Animal::where('collar', 'like', '%'.$collar.'%')->get();
//
//
//        return view('list.index')
//            ->with($this->data)
//            ->with(['animals' => $animals]);
//    }
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     * Function to filter animals by gender
//     */
//
//    public function filterGender(Request $request){
//        $gender = $request->get('gender');
//        $animals = Animal::where('gender_id_fk', 'like', '%'.$gender.'%')->get();
//
//
//        return view('list.index')
//            ->with($this->data)
//            ->with(['animals' => $animals]);
//    }
//
//    // Filter by range
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     * Function to filter animals by size
//     */
//
//    public function filterSize(Request $request){
//        $size = $request->get('size');
//        $animals = Animal::where('size_id_fk', 'like', '%'.$size.'%')->get();
//
//        return view('list.index')
//            ->with($this->data)
//            ->with(['animals' => $animals]);
//    }
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     * Function to filter animals by fur size
//     */
//
//    public function filterFurSize(Request $request){
//        $furSize = $request->get('fur_size');
//        $animals = Animal::where('fur_size_id_fk', 'like', '%'.$furSize.'%')->get();
//
//        return view('list.index')
//            ->with($this->data)
//            ->with(['animals' => $animals]);
//    }
//
//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     * Function to filter animals by age
//     */
//
//    public function filterAge(Request $request){
//        $age = $request->get('age');
//        $animals = Animal::where('age_id_fk', 'like', '%'.$age.'%')->get();
//
//        return view('list.index')
//            ->with($this->data)
//            ->with(['animals' => $animals]);
//    }
}
