<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Localidad;
use Response;

class LocalidadController extends Controller
{
    public function index()
    {
        //get all
        $localidades = Localidad::orderBy('nombre')->with('provincia')->get();//con la funcion provincia
        return Response::json($localidades);
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
        $localidad = $request->all();
        $localidad = Localidad::create($localidad);
        return Response::json($localidad);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        try {

            $localidad = Localidad::findOrFail($id)->with('provincia')->get();
            
        } catch (ModelNotFoundException $e) {
            $localidad = "NO ENCONTRADO " . $id;
        }
        return Response::json($localidad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //put
        $localidad = Localidad::find($id);
        $localidad->fill($request->all());
        $localidad->save();

        return Response::json($localidad);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {

            //delete
            $localidad = Localidad::findOrFail($id);
            Localidad::destroy($id); //metodo estatico

        } catch (ModelNotFoundException $e) {
            $localidad = "ERROR BORRADO " . $id;
        }

        return Response::json($localidad);
    }

}
