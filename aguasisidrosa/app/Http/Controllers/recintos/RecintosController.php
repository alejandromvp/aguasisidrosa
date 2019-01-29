<?php

namespace App\Http\Controllers\recintos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Recintos;
use App\Models\Localidad;
use App\Models\Tipo_recinto;
use App\Models\Arduino;
use DB;
use Carbon\Carbon;

class RecintosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$recintos = Recintos::all();
        $recintos = DB::table('recintos')
            ->leftJoin('arduino', 'recintos.arduino_id', '=', 'arduino.arduino_id')
            ->get();
        return view('recintos.recintos', compact('recintos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $localidades = Localidad::all();
        $tipo_recintos = Tipo_recinto::all();
        $arduinos = Arduino::all();
        return view('recintos.create', compact('localidades', 'tipo_recintos', 'arduinos'));
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
            'nombre_recinto' => "required",
            'recinto_orden' => "required",
            'localidad_id' => "required",
            'tipo_recinto' => "required",
            'arduino_id' => "",
        ]);

        Recintos::create([
           'recinto_nombre' => $validatedData['nombre_recinto'],
           'recinto_orden' => $validatedData['recinto_orden'],
           'localidad_id' => $validatedData['localidad_id'],
           'tipo_recinto_id' => $validatedData['tipo_recinto'],
           'arduino_id' => $validatedData['arduino_id'],
        ]);

        return redirect()->route('Recintos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recinto = Recintos::where('recinto_id', $id)->first();
        return view('recintos.show', compact('recinto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $arduinos = Arduino::all();
        //$recintos = Recintos::where('recinto_id', $id)->first();
         $recintos = DB::table('recintos')
            ->leftJoin('arduino', 'recintos.arduino_id', '=', 'arduino.arduino_id')->where('recintos.recinto_id', '=', $id)
            ->first();
         $tipo_recinto = DB::table('tipo_recinto')
            ->leftJoin('recintos', 'tipo_recinto.tipo_recinto_id', '=', 'recintos.tipo_recinto_id')->where('recintos.recinto_id', '=', $id)
            ->first();
         $tipo_recintos = Tipo_recinto::all();

         $localidades = Localidad::all();

         $localidad = DB::table('localidad')
            ->leftJoin('recintos', 'localidad.localidad_id', '=', 'recintos.localidad_id')->where('recintos.recinto_id', '=', $id)
            ->first();

        return view('recintos.edit', compact('recintos', 'arduinos', 'tipo_recinto', 'tipo_recintos', 'localidades', 'localidad')); 
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
            'desc_recinto_nombre' => "required",
            'rec_orden' => "required",
            'localidad_id' => "required",
            'tipo_recinto_id' => "required",
            'arduino_id' => "",
        ]);

        DB::table('recintos')->where('recinto_id', $id)->update([
            "recinto_nombre" => $request->input('desc_recinto_nombre'),
            "recinto_orden" => $request->input('rec_orden'),
            "localidad_id" => $request->input('localidad_id'),
            "tipo_recinto_id" => $request->input('tipo_recinto_id'),
            "arduino_id" => $request->input('arduino_id'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect()->route('Recintos.show',  $id);
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
    }
}
