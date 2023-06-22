@extends('layouts.app')
@section('create_cliant')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter le client</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tel_sté" class="col-md-4 col-form-label text-md-end">Telephone</label>

                            <div class="col-md-6">
                                <input id="tel_sté" type="text" class="form-control" name="tel_sté">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="patent" class="col-md-4 col-form-label text-md-end">Patent</label>

                            <div class="col-md-6">
                                <input id="patent" type="text" class="form-control" name="patent">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="rc" class="col-md-4 col-form-label text-md-end">RC</label>

                            <div class="col-md-6">
                                <input id="rc" type="text" class="form-control" name="rc">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="code_société" class="col-md-4 col-form-label text-md-end">Code Société</label>

                            <div class="col-md-6">
                                <input id="code_société" type="text" class="form-control" name="code_société">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
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
