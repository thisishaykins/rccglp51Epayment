<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Parishes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $parishes = Parishes::where(['status' => true])->with('category', 'shop', 'cover_image')->get();
        $parishes = Parishes::where(['status' => true])->get();
        return view('home', ['parishes' => $parishes]);
    }
}
