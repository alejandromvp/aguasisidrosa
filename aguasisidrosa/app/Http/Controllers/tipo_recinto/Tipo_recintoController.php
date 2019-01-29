<?php

namespace App\Http\Controllers\tipo_recinto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tipo_recinto;
use DB;
use Carbon\Carbon;

class Tipo_recintoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_recintos = Tipo_recinto::all();
        return view('tipo_recinto.tipo_recinto', compact('tipo_recintos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('tipo_recinto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'Nom_tipo_recinto' => "required|unique:tipo_recinto,tipo_recinto_nombre",
        ]);

        Tipo_recinto::create([
           'tipo_recinto_nombre' => $validatedData['Nom_tipo_recinto'],
        ]);

        return redirect()->route('Tipo_recinto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo_recinto = Tipo_recinto::where('tipo_recinto_id', $id)->first();
        return view('tipo_recinto.show', compact('tipo_recinto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_recinto = Tipo_recinto::where('tipo_recinto_id', $id)->first();
        return view('tipo_recinto.edit', compact('tipo_recinto')); 
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
          
        $validatedData = $request->validate([
            'desc_recinto' => "required|unique:tipo_recinto,tipo_recinto_nombre",
        ]);

        DB::table('tipo_recinto')->where('tipo_recinto_id', $id)->update([
            "tipo_recinto_nombre" => $request->input('desc_recinto'),
            "updated_at" => Carbon::now(),
        ]);
        return redirect()->route('Tipo_recinto.show',  $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $variable = Tipo_recinto::where('tipo_recinto_id', $id)->delete();
        return redirect()->route('Tipo_recinto.index');
    }
}
