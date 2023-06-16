<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facture;
use Illuminate\Support\Facades\Auth;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facture = Facture::where("user_id" , Auth::user()->id)->get();
        return view('Liste',["facture" => $facture]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $facture = new Facture();
        $facture->num = $request->num;
        $facture->date = $request->date;
        $facture->type_facture = $request->type_facture;
        $facture->user()->associate(Auth::user()->id);
        $facture->montant = $request->montant;
        $facture->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $factures = Facture::all();
        foreach ($factures as $fac) {
        if ($fac->type_facture == "vent") {
            $total = 0;
                $totale = $total + $fac->montant;
            }
        }

        return view('resultat', ["resultat" => $totale]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $facture = Facture::find($id);

        return view('Edit',["facture"=> $facture]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $facture = Facture::find($id);
        $facture->num = $request->num;
        $facture->date = $request->date;
        $facture->type_facture = $request->type_facture;
        $facture->montant = $request->montant;
        $facture->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Facture::destroy($id);
        return redirect('/facture/Create');
    }
}
