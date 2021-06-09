@extends('layout')

@section('titrePage')
    Informations sur le manga
@endsection

@section('contenu')
    <div class="card mb-3" style="max_width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset($path)}}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Titre : {{ $mangas->titre }}</h5>
                    <p class="card-text">Dessinateur : {{ $dessinateur->nom_dessinateur .' '. $dessinateur->prenom_dessinateur }}</p>
                    <p class="card-text">Scénariste : {{ $scenariste->nom_scenariste .' '. $scenariste->prenom_scenariste}}</p>
                    <p class="card-text">Genre : {{ $genre->lib_genre }}</p>
                    <p class="card-text">Prix : {{ $mangas->prix }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection