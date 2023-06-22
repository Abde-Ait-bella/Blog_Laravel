@extends('layouts.app')
@section('admin-dashbord')
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link {{ Route::has('dashbord.create') ? 'active' : '' }}" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                role="tab" aria-controls="nav-home" aria-selected="true">Gestion page d'accueil</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
                role="tab" aria-controls="nav-profile" aria-selected="false">Gestion des client</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <div class="container mt-5">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                Avis
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse "
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('dashbord.store') }}"
                                                        enctype='multipart/form-data'>
                                                        @csrf
                                                        <div>
                                                            @foreach ($avis as $av)
                                                                <div>
                                                                    <div class="card-header mb-3 rounded border-top">Commantaire
                                                                        {{ $av->id }}</div>

                                                                    <input type="hidden" name="id[]"
                                                                        value="{{ $av->id }}">
                                                                    <div class="row mb-3">
                                                                        <label for="titre"
                                                                            class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                        <div class="col-md-6">
                                                                            <input id="titre" type="text"
                                                                                class="form-control" name="titre[]" required
                                                                                value="{{ $av->titre }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="sous_titre"
                                                                            class="col-md-4 col-form-label text-md-end">Sous
                                                                            titre</label>

                                                                        <div class="col-md-6">
                                                                            <input id="sous_titre" type="text"
                                                                                class="form-control" name="sous_titre[]" required
                                                                                value="{{ $av->sous_titre }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="texte"
                                                                            class="col-md-4 col-form-label text-md-end">texte</label>


                                                                        <div class=" form-floating col-md-6">
                                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="texte[]">{{ $av->texte }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button" class="btn btn-outline-danger mb-3"
                                                                        onclick="this.parentElement.remove()">
                                                                        Suprimer
                                                                    </button>
                                                                </div>
                                                            @endforeach
                                                            <div class="card-header mb-3 rounded border-top">Ajouter Commantaire
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="titre"
                                                                    class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                <div class="col-md-6">
                                                                    <input id="titre" type="text" class="form-control"
                                                                        name="titre[]">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="sous_titre"
                                                                    class="col-md-4 col-form-label text-md-end">Sous
                                                                    titre</label>

                                                                <div class="col-md-6">
                                                                    <input id="sous_titre" type="text" class="form-control"
                                                                        name="sous_titre[]">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="texte"
                                                                    class="col-md-4 col-form-label text-md-end">texte</label>

                                                                    <div class=" form-floating col-md-6">
                                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="texte[]"></textarea>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-0">
                                                            <div class="col-md-6 offset-md-4">
                                                                <button type="submit" class="btn btn-outline-info">
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
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                Apropos
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-header">Partie 1</div>
                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('apropos.store') }}"
                                                        enctype='multipart/form-data'>
                                                        @csrf
                                                        @foreach ($apropos as $pr)
                                                            <div>
                                                                <div>
                                                                    <div class="card-header mb-3 rounded border-0">
                                                                        Coordonnées
                                                                    </div>
                                                                    <div>
                                                                        <div class="row mb-3">
                                                                            <label for="telephone"
                                                                                class="col-md-4 col-form-label text-md-end">Téléphone</label>

                                                                            <div class="col-md-6">
                                                                                <input id="telephone" type="text"
                                                                                    class="form-control" name="telephone" required
                                                                                    value="{{ $pr->telephone }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="sous_titre"
                                                                                class="col-md-4 col-form-label text-md-end">Email</label>

                                                                            <div class="col-md-6">
                                                                                <input id="email" type="text"
                                                                                    class="form-control" name="email" required
                                                                                    value="{{ $pr->email }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-header mb-3 rounded border-0 ">
                                                                        Informations
                                                                        écrites</div>
                                                                    <div>
                                                                        <div class="row mb-3">
                                                                            <label for="titre"
                                                                                class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                            <div class="col-md-6">
                                                                                <input id="titre" type="text"
                                                                                    class="form-control" name="titre" required
                                                                                    value="{{ $pr->titre }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="sous_titre"
                                                                                class="col-md-4 col-form-label text-md-end">Sous
                                                                                titre</label>

                                                                            <div class="col-md-6">
                                                                                <input id="sous_titre" type="text"
                                                                                    class="form-control" name="sous_titre"
                                                                                    required value="{{ $pr->sous_titre }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="texte"
                                                                                class="col-md-4 col-form-label text-md-end">Description</label>


                                                                            <div class=" form-floating col-md-6">
                                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description">{{ $pr->description }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-header mb-3 rounded border-0">Element
                                                                    </div>
                                                                    <div>
                                                                        <div class="row mb-3">
                                                                            <label for="titre"
                                                                                class="col-md-4 col-form-label text-md-end">Element
                                                                                1</label>

                                                                            <div class="col-md-6">
                                                                                <input id="element_1" type="text"
                                                                                    class="form-control" name="element_1" required
                                                                                    value="{{ $pr->element_1 }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="sous_titre"
                                                                                class="col-md-4 col-form-label text-md-end">Element
                                                                                2</label>

                                                                            <div class="col-md-6">
                                                                                <input id="element_2" type="text"
                                                                                    class="form-control" name="element_2" required
                                                                                    value="{{ $pr->element_2 }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="sous_titre"
                                                                                class="col-md-4 col-form-label text-md-end">Element
                                                                                3</label>

                                                                            <div class="col-md-6">
                                                                                <input id="element_3" type="text"
                                                                                    class="form-control" name="element_3" required
                                                                                    value="{{ $pr->element_3 }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-header mb-3 rounded border-top border-end border-start">Partie 2
                                                                        </div>
                                                                        <div>
                                                                            <div class="row mb-3">
                                                                                <label for="sous_titre"
                                                                                    class="col-md-4 col-form-label text-md-end">Annees experience</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="element_3" type="text"
                                                                                        class="form-control" name="annees_experience"
                                                                                        required value="{{ $pr->annees_experience }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label for="sous_titre"
                                                                                    class="col-md-4 col-form-label text-md-end">Image</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="element_3" type="file"
                                                                                        class="form-control" name="image"
                                                                                        required value="{{ $pr->image }}">
                                                                                </div>
                                                                            </div>
                                                                        <div class="card-header mb-3 rounded border-0 ">Nombres 1
                                                                            <div class="row mb-3">
                                                                                <label for="sous_titre"
                                                                                    class="col-md-4 col-form-label text-md-end">Chiffre</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="element_3" type="text"
                                                                                        class="form-control" name="chiffre_1"
                                                                                        required value="{{ $pr->chiffre_1 }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label for="sous_titre"
                                                                                    class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="element_3" type="text"
                                                                                        class="form-control" name="titre_1"
                                                                                        required value="{{ $pr->titre_1 }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-header mb-3 rounded border-0 ">Nombres 2
                                                                            <div class="row mb-3">
                                                                                <label for="sous_titre"
                                                                                    class="col-md-4 col-form-label text-md-end">Chiffre</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="element_3" type="text"
                                                                                        class="form-control" name="chiffre_2"
                                                                                        required value="{{ $pr->chiffre_2 }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label for="sous_titre"
                                                                                    class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="element_3" type="text"
                                                                                        class="form-control" name="titre_2"
                                                                                        required value="{{ $pr->titre_2 }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-header mb-3 rounded border-0 ">Nombres 3
                                                                            <div class="row mb-3">
                                                                                <label for="sous_titre"
                                                                                    class="col-md-4 col-form-label text-md-end">Chiffre</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="element_3" type="text"
                                                                                        class="form-control" name="chiffre_3"
                                                                                        required value="{{ $pr->chiffre_3 }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label for="sous_titre"
                                                                                    class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="element_3" type="text"
                                                                                        class="form-control" name="titre_3"
                                                                                        required value="{{ $pr->titre_3 }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                </div>
                                                <div class="row mb-0">
                                                    <div class="col-md-6 offset-md-4 mb-3">
                                                        <button type="submit" class="btn btn-outline-info">
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
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                                Services
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('services.store') }}">
                                                        @csrf
                                                        @foreach ($services as $Sr)
                                                            <div>
                                                                <div>
                                                                    <div class="card-header mb-3 rounded border-top">
                                                                        Services
                                                                    </div>
                                                                    <div>
                                                                        <input type="hidden" value="{{$Sr->id}}" name="id[]">
                                                                        <div class="row mb-3">
                                                                            <label for="icone"
                                                                                class="col-md-4 col-form-label text-md-end">Icone</label>

                                                                            <div class="col-md-6">
                                                                                <input id="icone" type="text"
                                                                                    class="form-control" name="icone[]" required
                                                                                    value="{{ $Sr->icone }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="titre"
                                                                                class="col-md-4 col-form-label text-md-end">titre</label>

                                                                            <div class="col-md-6">
                                                                                <input id="titre" type="text"
                                                                                    class="form-control" name="titre[]" required
                                                                                    value="{{ $Sr->titre }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="row mb-3">
                                                                            <label for="description"
                                                                                class="col-md-4 col-form-label text-md-end">Description</label>


                                                                            <div class=" form-floating col-md-6">
                                                                                <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description[]">{{ $Sr->description }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <div>
                                                            <div>
                                                                <div class="card-header mb-3 rounded border-top">
                                                                    Services
                                                                </div>
                                                                <div>
                                                                    <div class="row mb-3">
                                                                        <label for="icone"
                                                                            class="col-md-4 col-form-label text-md-end">Icone</label>

                                                                        <div class="col-md-6">
                                                                            <input id="icone" type="text"
                                                                                class="form-control" name="icone[]"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="titre"
                                                                            class="col-md-4 col-form-label text-md-end">titre</label>

                                                                        <div class="col-md-6">
                                                                            <input id="titre" type="text"
                                                                                class="form-control" name="titre[]"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="row mb-3">
                                                                        <label for="description"
                                                                            class="col-md-4 col-form-label text-md-end">Description</label>


                                                                        <div class=" form-floating col-md-6">
                                                                            <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description[]"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row mb-0">
                                                    <div class="col-md-6 offset-md-4 mb-3">
                                                        <button type="submit" class="btn btn-outline-info">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            @yield('dashbord-client')
        </div>
    </div>
@endsection
