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
                'colors'   =>  $colors,
                'colorEyes'   =>  $colorEyes,
                'furSizes'   =>  $furSizes,
                'genders'   =>  $genders,
                'races'   =>  $races,
                'sizes'   =>  $sizes,
                'status'   =>  $status,
                'types' => $types
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $values = $request->all();

            // add an animal to the db
            $addAnimal = new Animal();

            $addAnimal->name  = $values['name'];
            $addAnimal->picture  = $values['picture'];
            $addAnimal->tatoo  = $values['tatoo'];
            $addAnimal->microship  = $values['microship'];
            $addAnimal->collar  = $values['collar'];
            $addAnimal->comment  = $values['comment'];
            $addAnimal->statu_id_fk  = $values['statu'];
            $addAnimal->user_id_fk  = $values['user'];
            $addAnimal->color_eyes_id_fk  = $values['colorEyes'];
            $addAnimal->color_id_fk  = $values['color'];
            $addAnimal->size_id_fk  = $values['size'];
            $addAnimal->fur_size_id_fk  = $values['furSize'];
            $addAnimal->gender_id_fk  = $values['gender'];
            $addAnimal->age_id_fk  = $values['age'];
            $addAnimal->race_id_fk  = $values['race'];



        // On sauvegarde le formulaire dans la table
        $addAnimal->save();


        $animal = Animal::all();
        return view('list.index')->with('animals', $animal);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function select($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
    }
}
