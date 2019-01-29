<?php

namespace App\Http\Controllers\localidad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Localidad;
use DB;
use Carbon\Carbon;

class LocalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localidades = Localidad::all();
        return view('localidad.localidad', compact('localidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('localidad.create');
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
            'cod_localidad' => "numeric|required",
            'nom_localidad' => "required",
            'orden_localidad' => "numeric|required",
        ]);

        Localidad::create([
           'localidad_codigo' => $validatedData['cod_localidad'],
           'localidad_nombre' => $validatedData['nom_localidad'],
           'localidad_orden' => $validatedData['orden_localidad'],
        ]);

        return redirect()->route('Localidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $localidad = Localidad::where('localidad_id', $id)->first();
        return view('localidad.show', compact('localidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $localidad = Localidad::where('localidad_id', $id)->first();
        return view('localidad.edit', compact('localidad')); 
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
        $localidad = Localidad::where('localidad_id', $id)->first();
        $validatedData = $request->validate([
            'cod_localidad' => 'required',
            'nom_localidad' => "required",
            'orden_localidad' => "required|numeric",
        ]);

        DB::table('localidad')->where('localidad_id', $id)->update([
            "localidad_codigo" => $request->input('cod_localidad'),
            "localidad_nombre" => $request->input('nom_localidad'),
            "localidad_orden" => $request->input('orden_localidad'),
            "updated_at" => Carbon::now(),
        ]);
        return redirect()->route('Localidades.show',  $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $variable = Localidad::where('localidad_id', $id)->delete();
        return redirect()->route('Localidades.index');
    }
}
