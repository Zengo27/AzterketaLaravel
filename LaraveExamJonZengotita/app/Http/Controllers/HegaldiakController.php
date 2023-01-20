<?php

namespace App\Http\Controllers;

use App\Models\Hegaldiak;
use Illuminate\Http\Request;

class HegaldiakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Hegaldiak::all();
    }
    public function show(Hegaldiak $hegaldiak)
    {
        return $hegaldiak;
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hegaldiak  $hegaldiak
     * @return \Illuminate\Http\Response
     */
    public function showAll(Hegaldiak $hegaldiak)
    {
        $hegaldiak = Hegaldiak::all();
        return view('/hegaldiak/index', ['hegaldiak' => $hegaldiak]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hegaldiak  $hegaldiak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hegaldiak = Hegaldiak::find($id);
        
        $hegaldiak->irteera = $request->irteera;
        $hegaldiak->helmuga = $request->helmuga;
        $hegaldiak->irteera_data = $request->irteera_data;
        $hegaldiak->iraupena = $request->iraupena;
        $hegaldiak->save();

        return redirect()->route('/hegaldiak/index')->with('success', 'Hegaldia updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hegaldiak  $hegaldiak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hegaldiak $hegaldiak)
    {
        $hegaldiak->delete();
    }
}
