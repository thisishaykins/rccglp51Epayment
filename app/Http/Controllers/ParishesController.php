<?php

namespace App\Http\Controllers;

use App\Parishes;
use App\Offering;
use App\Offering_Currencies;
use Illuminate\Http\Request;

class ParishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parishes  $parishes
     * @return \Illuminate\Http\Response
     */
    public function show($parish_slug)
    {
        // echo $parish_slug;
        $parish = Parishes::where(['slug' => $parish_slug, 'status' => true])->with('offerings', 'global_offerings')->firstOrFail();
        $currencies = Offering_Currencies::all();
        $global_offerings = Offering::all();
        // var_dump($parish);
        return view('parishes.show_single', compact('parish', 'currencies', 'global_offerings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parishes  $parishes
     * @return \Illuminate\Http\Response
     */
    public function edit(Parishes $parishes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parishes  $parishes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parishes $parishes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parishes  $parishes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parishes $parishes)
    {
        //
    }
}
