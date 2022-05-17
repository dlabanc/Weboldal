<?php

namespace App\Http\Controllers;

use App\Models\Teszt;
use Illuminate\Http\Request;

class TesztController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teszt = Teszt::all();
        return $teszt;
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
        /* $teszt = new Teszt;
        $teszt->id = $request->id;
        $teszt->kategorianev = $request->kategorianev;
        $teszt->save(); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teszt  $teszt
     * @return \Illuminate\Http\Response
     */
    public function show(Teszt $id)
    {
        $teszt = Teszt::find($id);
        return response()->json($teszt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teszt  $teszt
     * @return \Illuminate\Http\Response
     */
    public function edit(Teszt $teszt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teszt  $teszt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teszt $id)
    {
       /*  $teszt = Teszt::find($id);
        $teszt->id = $request->id;
        $teszt->kategorianev = $request->kategorianev;
        $teszt->save(); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teszt  $teszt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teszt $id)
    {
        $teszt = Teszt::find($id);
        $teszt->delete();
    }

    public function expandAll()
    {
        $teszt = Teszt::with('kategoria')->get();
        return $teszt;
    }
}
