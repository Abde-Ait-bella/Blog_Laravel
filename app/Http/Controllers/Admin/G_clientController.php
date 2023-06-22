<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Facture;
use Illuminate\Support\Facades\Auth;

class G_clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = User::all();
        return view('Admin.dashbord_client', ["client" => $client]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Create_Client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        $facture = Facture::where('user_id', $user->id)->get();
        return view('dashbord_facture',["facture" => $facture, "user" => $user]);
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
