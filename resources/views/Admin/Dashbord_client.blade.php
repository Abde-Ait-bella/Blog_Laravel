@extends('Admin.dashbord')
@section('dashbord-client')
    @foreach ($client as $cli)
    <div class="container">
        <div class="d-flex">
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">{{$cli->name}}</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">Telephone :{{$cli->tel_sté}}</h5>
                    <h4 class="card-title">Code société :{{ $cli->id }}</h4>
                    <h3 class="card-title">RC :{{ $cli->rc }}</h3>
                    <a href="{{route('dashbord.show', $cli->id)}}">Voire les Facture</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
