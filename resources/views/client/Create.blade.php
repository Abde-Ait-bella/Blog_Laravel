@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Déposer la facture</div>
                    <div class="card-body">
                        <form action="{{route('facture.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control mb-3" placeholder="Numéro de facture" name="num">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control mb-3" placeholder="Date" name="date">
                            </div>
                            <select class="form-select mb-3" name="type_facture">
                                <option selected>Type de facture :</option>
                                <option value="Vent">Vent</option>
                                <option value="Achat">Achat</option>
                            </select>
                            <div class="form-group">
                                <input type="text" class="form-control mb-3" placeholder="Montant" name="montant">
                            </div>
                            <div>
                                <button class="btn btn-outline-success" onclick="envoyerFacture()">Envoyer<div id="loaderenvoyer" class="loaderenvoyer"></div></button>
                            </div>
                        </form>
                    </div>
                </div>
                <center>
                    <div class="mt-5">
                        <a href="{{route('facture.liste')}}" class="btn btn-info mt-2">Mes Factures</a>
                    </div>
                    <div class="mt-5">
                        <a href="{{route('facture.resultat')}}" class="btn btn-outline-secondary mt-2">Resultat</a>
                    </div>
                </center>
            </div>
        </div>
    </div>
@endsection
