<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Avis;
use Illuminate\Http\Request;

class G_pageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $avis = Avis::all();
        if ($avis->isEmpty()) {
            $avis = new Avis();
            $avis->titre1 = "Ivor Herbert";
            $avis->sous_titre1 = "Manager, Airlines";
            $avis->texte1 = "Sit amet consectetur adipi scey elit Condimentum quam nun facilisis condim entum pellentesque sapien quis tincidunt pulvinar non sem nisle eget enim elit. Imperdiet venenatis sed libero lectus sed cursus";
            $avis->titre2 = "Ivor Herbert";
            $avis->sous_titre2 = "Manager, Airlines";
            $avis->texte2 = "Sit amet consectetur adipi scey elit Condimentum quam nun facilisis condim entum pellentesque sapien quis tincidunt pulvinar non sem nisle eget enim elit. Imperdiet venenatis sed libero lectus sed cursus";
            $avis->titre3 = "Ivor Herbert";
            $avis->sous_titre3 = "Manager, Airlines";
            $avis->texte3 = "Sit amet consectetur adipi scey elit Condimentum quam nun facilisis condim entum pellentesque sapien quis tincidunt pulvinar non sem nisle eget enim elit. Imperdiet venenatis sed libero lectus sed cursus";
            $avis->save();
        }
        return view('Home', ["avis" => $avis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $avis = Avis::all();
        return view('dashbord', ["avis" => $avis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $avis = Avis::find(1);
            $extension = $request->image->extension();
            $name = uniqid().".". $extension ;
            $path = $request->image->storeAs('Images', $name, 'public');
            $avis->image = $path;
        $avis->titre1 = $request->titre_1;
        $avis->sous_titre1 = $request->sous_titre_1;
        $avis->texte1 = $request->texte_1;
        $avis->titre2 = $request->titre_2;
        $avis->sous_titre2 = $request->sous_titre_2;
        $avis->texte2 = $request->texte_2;
        $avis->titre3 = $request->titre_3;
        $avis->sous_titre3 = $request->sous_titre_3;
        $avis->texte3 = $request->texte_3;
        $avis->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
