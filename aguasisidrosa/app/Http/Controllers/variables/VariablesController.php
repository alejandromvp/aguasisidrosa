<?php

namespace App\Http\Controllers\variables;

use App\Models\variables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;


class VariablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variables = variables::all();
        return view('variables.variables', compact('variables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('variables.create');
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
            'desc_variable' => "required|unique:variables,desc_variables"
        ]);

        variables::create([
           'desc_variables' => $validatedData['desc_variable'],
        ]);

        return redirect()->route('variablesARD.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $variable = variables::where('id_variable', $id)->first();
        return view('variables.show', compact('variable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $variable = variables::where('id_variable', $id)->first();
        return view('variables.edit', compact('variable')); 
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
            'desc_variable' => "unique:variables,desc_variables",
        ]);

        DB::table('variables')->where('id_variable', $id)->update([
            "desc_variables" => $request->input('desc_variable'),
            "updated_at" => Carbon::now(),
        ]);
        return redirect()->route('variablesARD.show',  $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $variable = variables::where('id_variable', $id)->delete();
        return redirect()->route('variablesARD.index');
    }
}
