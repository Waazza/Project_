<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
<<<<<<< Updated upstream

class HomeController extends Controller
{
=======
use App\Model\Animal;
//use App\Http\Controllers\Auth\LoginController;
//use loginForm;
//use login;

class HomeController extends Controller
{
    private $sliders;
>>>>>>> Stashed changes
    /**
     * Create a new controller instance.
     *
     * @return void
     */
<<<<<<< Updated upstream
    public function __construct()
    {
        $this->middleware('auth');
    }
=======
    //public function __construct()
    //{
      //   $this->middleware('auth');
    //}
>>>>>>> Stashed changes

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< Updated upstream
      $sliders = Animals::all();//->orderBy('id', 'desc')->paginate(2);
        return view('home.index')->with('sliders', $sliders);
=======
//NFM: sortByDesc() est une méthode Collection, orderBy() est une méthode Eloquent
      $sliders = Animal::all()->sortByDesc('id');
      return view('home.index')->with(['sliders'=> $sliders]);


>>>>>>> Stashed changes
    }
}
