<?php

<<<<<<< HEAD
namespace Condominium\Http\Controllers;
=======
namespace App\Http\Controllers;
>>>>>>> 73bbcf88b77d51d418ca37be1049baa1bff890cc

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
