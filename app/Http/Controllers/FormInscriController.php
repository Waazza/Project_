<?php

namespace App\Http\Controllers;

use App\Model\City;
use App\Model\User;
use Illuminate\Http\Request;
use Redirect;
use Validator;

class FormInscriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('forms/inscriptions.index')->with([
            'users' => $users,
        ]);
    }

    public function ajaxZipCode (Request $request)
    {
        $zipCode = $request->zipCodeCities;

        $cities = City::select('name', 'num_INSEE')->where('zip_code', '=', $zipCode )->get();

        if(isset($cities)){
            return response()->json(array('success' => true, 'city' => $cities ));

        }else{
            return response()->json(array('success'=> false));
        }

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
        $idCity = City::where(['name' => $request->selectCity, 'zip_code' => $request->zipCode])->get('id');

        if($values['password'] === $values['checkPassword']){
            $passwordHash = password_hash($request->password, PASSWORD_BCRYPT);
        }else{
            echo 'erreur de saisie';
        }
        
        $rules = [
            'lastname'     => 'string|required',
            'firstname'  => 'string|required',
            'email' => 'email|required',
            'phone' => 'integer|required',
            'address'   => 'string|required',
            'selectCity'   => 'string|required',
            'zipCode'   => 'string|required',
            'password'   => 'required',
        ];

        $validator = Validator::make($values, $rules, [
            'lastname.string'   => 'Votre Nom ne doit pas comporter de caractere speciales',
            'lastname.required'   => 'Nom obligatoire',
            'firstname.string'  => 'Votre prenom ne doit pas comporter de caractere speciales',
            'firstname.required'  => 'Prénom obligatoire',
            'email.email'       => 'Email invalide',
            'email.required'    => 'Email obligatoire',
            'phone.required'    => 'le numéro de telephone est obligatoir',
            'phone.integer'    => 'le numéro de telephone est incorrect',
            'address.string'  => 'Votre adresse est incorrect',
            'address.required'  => 'Adresse obligatoire',
            'selectCity.string'  => 'Votre Ville est incorrect',
            'selectCity.required'  => 'Ville obligatoire',
            'zipCode.string'  => 'Votre Code Postal est incorrect',
            'zipCode'  => 'Code Postal obligatoire',
            'password.required'  => 'Mot de passe obligatoire'
        ]);

        if($validator->fails()){
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // add an animal to the db
        $addUser = new User();

        $addUser->lastname  = $values['lastname'];
        $addUser->firstname  = $values['firstname'];
        $addUser->email  = $values['email'];
        $addUser->phone  = $values['phone'];
        $addUser->address  = $values['address'];
        $addUser->city_id_fk  = $idCity[0]->id;
        $addUser->city_zip_code_fk  = $values['zipCode'];
        $addUser->password = $passwordHash;

        $addUser->save();
        return view('monCompte.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
    public function destroy($id)
    {
        //
    }
}
