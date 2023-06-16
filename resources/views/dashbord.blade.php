@extends('layouts.app')
@section('dashbord')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Blog</div>
                    @foreach ($avis as $av)
                    <sup>“</sup>{{ $av->titre1 }}<sub>“</sub>
                    @endforeach
                    <div class="card-body">
                        <form method="POST" action="{{ route('dashbord.store') }}">
                            @csrf
                            <div class="card-header mb-3">Blog 1</div>
                            <div>
                                <div class="row mb-3">
                                    <label for="titre_1" class="col-md-4 col-form-label text-md-end">Titre</label>

                                    <div class="col-md-6">
                                        <input id="titre_1" type="text" class="form-control" name="titre_1"
                                            required >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="sous_titre_1" class="col-md-4 col-form-label text-md-end">Sous
                                        titre</label>

                                    <div class="col-md-6">
                                        <input id="sous_titre_1" type="text" class="form-control" name="sous_titre_1"
                                            >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="texte_1" class="col-md-4 col-form-label text-md-end">Texte</label>

                                    <div class="col-md-6">
                                        <textarea id="texte_1" type="text" class="form-control" name="texte_1"
                                            ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header mb-3">Blog 2</div>
                            <div>
                                <div class="row mb-3">
                                    <label for="titre_2" class="col-md-4 col-form-label text-md-end">Titre</label>

                                    <div class="col-md-6">
                                        <input id="titre_2" type="text" class="form-control" name="titre_2">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="sous_titre_2" class="col-md-4 col-form-label text-md-end">Sous
                                        titre</label>

                                    <div class="col-md-6">
                                        <input id="sous_titre_2" type="text" class="form-control" name="sous_titre_2">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="texte_2" class="col-md-4 col-form-label text-md-end">Texte</label>

                                    <div class="col-md-6">
                                        <textarea id="texte_2" type="text" class="form-control" name="texte_2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Modifier
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
