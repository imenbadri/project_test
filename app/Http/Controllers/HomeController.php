<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth')->except('post_ajouter_livre');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $livres=Livre::orderBy('Id','Desc')->paginate('4');
        return view('welcome', ['livres'=>$livres]);
    }
  

}
