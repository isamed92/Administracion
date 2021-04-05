<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Pais;
use Response;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all
        $paises = Pais::orderBy('nombre')->get();
        return Response::json($paises);
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
        //post
        $pais = $request->all();
        $pais = Pais::create($pais);
        return Response::json($pais);
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

            $pais = Pais::findOrFail($id);
            
        } catch (ModelNotFoundException $e) {
            $pais = "NO ENCONTRADO " . $id;
        }
        return Response::json($pais);
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
         

        //put
        $pais = Pais::find($id);
        $pais->fill($request->all());
        $pais->save();

        return Response::json($pais);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {

            //delete
            $pais = Pais::findOrFail($id);
            Pais::destroy($id); //metodo estatico

        } catch (ModelNotFoundException $e) {
            $pais = "ERROR BORRADO " . $id;
        }

        return Response::json($pais);
    }
}
