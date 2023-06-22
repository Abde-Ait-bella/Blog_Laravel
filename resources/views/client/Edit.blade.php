@extends('layouts.app')
@section('Edite')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier la facture</div>
                <div class="card-body">
                    <form action="{{ route('facture.update', $facture->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" placeholder="Numéro de facture" name="num" value="{{ $facture->num }}">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control mb-3" placeholder="Date" name="date" value="{{ $facture->date }}">
                        </div>
                        <select class="form-select mb-3" name="type_facture">
                            <option selected>Type de facture :</option>
                            <option value="Vent">Vent</option>
                            <option value="Achat">Achat</option>
                        </select>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" placeholder="Montant" name="montant" value="{{ $facture->montant }}">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-light">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
