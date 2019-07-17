<?php

namespace App\Http\Controllers;

use App\Model\Animal;
use App\Model\Color;
use App\Model\ColorEyes;
use App\Model\Gender;
use App\Model\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ListController extends Controller
{
    private $animals;
    private $colors;
    private $colorsEyes;
    private $types;
    private $genders;

    private $data;

    public function __construct()
    {
        $this->animals = Animal::all();
        $this->colors = Color::all();
        $this->colorsEyes = ColorEyes::all();
        $this->types = Type::all();
        $this->genders = Gender::all();

        $this->data = [
            'animals' => $this->animals,
            'colors' => $this->colors,
            'colorsEyes' => $this->colorsEyes,
            'types' => $this->types,
            'genders' => $this->genders,
        ];
    }

    public function index(){
        return view('list.index')
            ->with($this->data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Function to search an animal by name
     */

    public function search(Request $request){
        $search = $request->get('search');
        $animals = Animal::where('name', 'like', '%'.$search.'%')->get();
       //dd($animals);

        return view('list.index')
            ->with($this->data)
            ->with(['animals' => $animals]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Function to search an animal by color
     */

    public function filterColor(Request $request){
        $color = $request->get('color');
//        $color = Input::get('color');
        $filterColor = Color::where('id', 'like', '%'.$color.'%')->get();

//        dd($color);
//        dd($filterColor);
        return view('list.index')
            ->with($this->data)
            ->with(['color' => $filterColor]);
    }
}
