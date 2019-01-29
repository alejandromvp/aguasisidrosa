<?php

namespace App\Http\Controllers\arduinos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Arduino;
use DB;
use Carbon\Carbon;

class ArduinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arduinos = Arduino::all();
        return view('arduinos.arduinos', compact('arduinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('arduinos.create');
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
            'desc_arduino' => "required|unique:variables,desc_variables",
            'desc_arduino' => "required|unique:variables,desc_variables",
        ]);

        Arduino::create([
           'nombre_arduino' => $validatedData['desc_arduino'],
        ]);

        return redirect()->route('Arduino.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arduino = Arduino::where('arduino_id', $id)->first();
        return view('arduinos.show', compact('arduino'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arduino = Arduino::where('arduino_id', $id)->first();
        return view('arduinos.edit', compact('arduino')); 
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
            'desc_arduino' => "required",
            'desc_tag' => "required|unique:arduino,tag",
        ]);

        DB::table('arduino')->where('arduino_id', $id)->update([
            "nombre_arduino" => $request->input('desc_arduino'),
            "tag" => $request->input('desc_tag'),
            "updated_at" => Carbon::now(),
        ]);
        
        $arduino = Arduino::where('arduino_id', $id)->first();
        return redirect()->route('Arduino.show',  $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $variable = Arduino::where('arduino_id', $id)->delete();
        return redirect()->route('Arduino.index');
    }
}
