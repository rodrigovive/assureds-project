<?php

namespace App\Http\Controllers;

use App\PersonaAsegurada;
use Illuminate\Http\Request;

class PersonAssuredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.person.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.person.create');
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
     * @param  \App\personAssured  $personAssured
     * @return \Illuminate\Http\Response
     */
    public function show(personAssured $personAssured)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\personAssured  $personAssured
     * @return \Illuminate\Http\Response
     */
    public function edit(personAssured $personAssured)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personAssured  $personAssured
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personAssured $personAssured)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\personAssured  $personAssured
     * @return \Illuminate\Http\Response
     */
    public function destroy(personAssured $personAssured)
    {
        //
    }
}
