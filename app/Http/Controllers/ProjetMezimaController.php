<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjetMezima;
use App\Models\TacheMezima;


class ProjetMezimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $projetMezimas = ProjetMezima::all();
        $tacheMezimas=TacheMezima::all();
        $PTMezima=[$projetMezimas,$tacheMezimas];
        
        // ['user' => User::findOrFail($id)]
        return view('projet.ProjetIndex', compact('PTMezima'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projetMezimas = ProjetMezima::all();
        return view('projet.ProjetCreate', compact('projetMezimas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $ProjetRequest)
    {
        ProjetMezima::create($ProjetRequest->all());
    return redirect()->route('projet.index')->with('info', 'Le film a bien été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projetMezima = ProjetMezima::findOrFail($id);
        $tacheMezima=TacheMezima::all();
        $trop=[$projetMezima,$tacheMezima];

        // ['user' => User::findOrFail($id)]
        return view('index2', compact('trop'));
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
