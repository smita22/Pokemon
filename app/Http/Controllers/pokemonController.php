<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use View;
use App\Models\Pokemon;

class pokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemonData = Http::get(env('API_URL'))->json();
        $pokemonRenderData = array();
        if (!empty($pokemonData)) {
            foreach ($pokemonData['results'] as $pokemonData) {
                $pokeData= Http::get($pokemonData['url'])->json();
                $pokeId = $pokeData['id'];
                $pokeName = $pokeData['name'];
                $pokeType = $pokeData['types'];
                $pokeTypeNames = array();
                $imageUrl = env('IMAGE_URL')  . $pokeId . ".png";
                foreach ($pokeType as $pokeType) {
                    array_push($pokeTypeNames,$pokeType['type']['name'])  ;                    
                }
                $onePokeData = array("id"=>$pokeId,"name"=>$pokeName,"img"=>$imageUrl,"type"=>$pokeTypeNames);
                array_push($pokemonRenderData,$onePokeData);
            }
        }
        return View::make('index', array('pokemonRenderData' => $pokemonRenderData));
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
        //
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
