<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apropos;
use App\Models\Avis;
use App\Models\Service;
use Illuminate\Http\Request;

class G_pageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apropos = Apropos::all();
        $avis = Avis::all();
        $services = Service::all();
        return view('Admin.dashbord',["avis" => $avis, "apropos" => $apropos, "services" => $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $apropos = Apropos::all();
        $avis = Avis::all();
        $services = Service::all();
        return view('admin.dashbord', ["avis" => $avis, "apropos" => $apropos, "services" => $services]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach ($request->titre as $index => $titre) {
            $id = @$request->id[$index];
            $sous_titre = $request->sous_titre[$index];
            $texte = $request->texte[$index];
            if (!$titre) {
                continue;
            }
            if ($id) {
                $avis = Avis::find($id);
            }else{
                $avis = new Avis();
            }
            $avis->titre = $titre;
            $avis->sous_titre = $sous_titre;
            $avis->texte = $texte;
            $avis->save();
        }
        Avis::whereNotIn('id' , $request->id)->delete();

     return redirect('/admin/dashbord');
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
