<?php

namespace App\Http\Controllers;

use App\Models\AdresseEtudiant;
use Illuminate\Http\Request;

class AdresseEtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $AdresseEtudiant = AdresseEtudiant::all();
        return view ('pages.address', compact('AdresseEtudiant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.creation-adresse');
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
        $AdresseEtudiant = new AdresseEtudiant();
        $AdresseEtudiant->Numero = $request->get('Numero');
        $AdresseEtudiant->NomdeRue = $request->get('NomdeRue');
        $AdresseEtudiant->CodePostal = $request->get('CodePostal');
        $AdresseEtudiant->Ville = $request->get('Ville');

        $AdresseEtudiant->save();

        return redirect('dashboard');
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
        return redirect("ShowList");
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
