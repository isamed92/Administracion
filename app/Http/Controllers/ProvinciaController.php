<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Provincia;
use Response;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all
        $provincias = Provincia::orderBy('nombre')->with('pais')->get(); //con la funcion pais
        return Response::json($provincias);
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
        try {

            $provincia = $request->all(); //tomamos todos los datos que vienen en el cuerpo del request
            $provincia = Provincia::create($provincia); //crea un registro

        } catch (ModelNotFoundException $e) {
            //mensaje
        }
        return Response::json($provincia);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //devuelve un registro especificado
        try {

            $provincia = Provincia::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            $provincia = "NO ENCONTRADO " . $id;
        }
        return Response::json($provincia);
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
        try {
            $provincia = Provincia::findOrFail($id);
            $provincia->fill($request->all());
            $provincia->save();
        } catch (ModelNotFoundException $e) {
            //mensaje
        }

        return Response::json($provincia);
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
            $provincia = Provincia::findOrFail($id);
            Provincia::destroy($id); //metodo estatico

        } catch (ModelNotFoundException $e) {
            $provincia = "ERROR BORRADO " . $id;
        }

        return Response::json($provincia);
    }
}
