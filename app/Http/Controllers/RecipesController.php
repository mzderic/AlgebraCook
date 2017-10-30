<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recipe;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', ['recipes' => Recipe::get()]);
    }

    
    public function add()
    {
        return ("Prikaz view-a sa web obrascem za unos.");
    }
	
	public function save(Request $request) 
	{
		// $request->nameInputa = vrijednostInputa
		return("Spremam podatke iz webobrasca u bazu");
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
    public function view($id)
    {
        return "Prikaz recepta ID: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Promjena recepta sa ID:" . $id; // Prikaz web obrasca
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
        return "Spremanje promjena recepta ID: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return "Brisanje recepta ID: " . $id;
    }
}
