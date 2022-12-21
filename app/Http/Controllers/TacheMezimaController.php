<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TacheMezima ;
// use App\Http\Requests\TacheMezima as TacheRequest;

class TacheMezimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request )
    {
    
        $taches = $request->input('nomTache');
         $taches=json_decode(''.$taches,false);
        var_dump($taches); 
        $ipAddress = $request->ip();
        echo "".$ipAddress;
        // $name = $request->input('name', 'Sally');
        $key=0;
        foreach ($taches as  $tache) {
            

            $request->merge(['nomTache' => $tache->nomT]);
            $request->merge(['dureeTache' => $tache->dureeT]);
            $request->merge(['statutTache' => $tache->statuTache]);
            $request->merge(['tacheAnt' => $tache->tacheAnt]);
            $request->merge(['projet_mezima_id' => 1]);

            TacheMezima::create($request->all());
        }
        
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
