@extends('layouts.app')
@section('dashbord_facture')
<center>
    @foreach ($facture as $fact)
        <div class="card d-inline-flex justify-cantet-canter py-2 ms-0 col-md-3 mb-1">
            <div class="card-body">
                <div class="container">
                    <p class="my-4 mx-0" style="font-size: 20px;">{{ $user->name }}</p>
                    <div class="row">
                        <ul class="list-unstyled text-start">
                            <i class="far fa-building fa-4x ms-0" style="color:#8f8061 ;"></i>
                            <li class="text-muted mt-1"><span class="text-black">N°</span> {{ $fact->num }}</li>
                            <li class="text-black">Type : <span class="fw-bold text-secondary">{{ $fact->type_facture}}</span></li>
                            <li class="text-black mt-1">{{ $fact->date }}</li>
                        </ul>
                    </div>
                    <div class="row">
                        <hr style="border: 2px solid black;">
                    </div>
                    <div class="row text-black">

                        <div class="col-xl-12">
                            <p class="float-end fw-bold">Montant: {{ $fact->montant }}DH
                            </p>
                        </div>
                        <hr style="border: 2px solid black;">
                    </div>
                    <div class="text-center " style="margin-top: 15px;">
                        <a href="{{ route('facture.edit', $fact->id) }}" class="text-info btn btn-outline py-0">Modifier</a><br>
                        <form action="{{ route('facture.destroy', $fact->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <div class="d-flex justify-content-center">
                                <button type="submit" href="" class=" btn btn-outline  text-danger py-0 d-flex" onclick="supprimerFacture()">
                                    Supprimer
                                    <div id="loader" class="loader"></div>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</center>
@endsection
