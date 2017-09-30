<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ystock;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = ystock::orderby("id")->get();
        return view('home',compact("stocks"));
    }
}
