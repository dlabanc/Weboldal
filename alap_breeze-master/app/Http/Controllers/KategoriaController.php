<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoria = Kategoria::all();
        return $kategoria;
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

        $kategoria = new Kategoria;
        $kategoria->id = $request->id;
        $kategoria->kategorianev = $request->kategorianev;
        $kategoria->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategoria  $kategoria
     * @return \Illuminate\Http\Response
     */
    public function show(Kategoria $id)
    {
        $kategoria = Kategoria::find($id);
        return response()->json($kategoria);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategoria  $kategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategoria $kategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategoria  $kategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategoria $id)
    {
        $kategoria = Kategoria::find($id);
        $kategoria->id = $request->id;
        $kategoria->kategorianev = $request->kategorianev;
        $kategoria->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategoria  $kategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategoria $id)
    {
        $kategoria = Kategoria::find($id);
        $kategoria->delete();
    }
}
