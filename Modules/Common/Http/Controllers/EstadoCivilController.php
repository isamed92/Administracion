<?php

namespace Modules\Common\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Common\Entities\EstadoCivil;
use Response;

class EstadoCivilController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        //get all
        $estados = EstadoCivil::orderBy('nombre')->get();
        return Response::json($estados);
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
        $estado = $request->all();
        $estado = EstadoCivil::create($estado);
        return Response::json($estado);
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

            $estado = EstadoCivil::findOrFail($id);
            
        } catch (ModelNotFoundException $e) {
            $estado = "NO ENCONTRADO " . $id;
        }
        return Response::json($estado);
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
        $estado = EstadoCivil::find($id);
        $estado->fill($request->all());
        $estado->save();

        return Response::json($estado);
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
            $estado = EstadoCivil::findOrFail($id);
            EstadoCivil::destroy($id); //metodo estatico

        } catch (ModelNotFoundException $e) {
            $estado = "ERROR BORRADO " . $id;
        }

        return Response::json($estado);
    }
}
