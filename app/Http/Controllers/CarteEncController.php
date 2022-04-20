<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CarteEtudiant ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use function symfony\Component\Mime\Header\get;

class CarteEncController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cartesEtudiant = CarteEtudiant::all();
        return view ('pages.index', compact('cartesEtudiant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.creation-carte');
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
        $carteEtudiant = new CarteEtudiant();
        $nomFichierAttache = time().request()->fichierCV->getClientOriginalName();
        $request->fichierCV->storeAs('public',$nomFichierAttache);
        $carteEtudiant->nomEtudiant = $request->get('nomEtudiantFormulaire');
        $carteEtudiant->prénomEtudiant = $request->get('prénomEtudiantFormulaire');
        $carteEtudiant->email = $request->get('email');
        $carteEtudiant->telephone = $request->get('telephone');
        $carteEtudiant->date = $request->get('date');
        $carteEtudiant->section = $request->get('section');
        $carteEtudiant->fichierCV = $nomFichierAttache;



        $carteEtudiant->save();

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
        return redirect("CarteList");
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
