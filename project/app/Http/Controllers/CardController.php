<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Animal;

class CardController extends Controller
{
    public function index(){
        $id = 10;
        $animal = Animal::find($id);

        return view('card.index')
            ->with(['animal' => $animal]

            );
    }

}
