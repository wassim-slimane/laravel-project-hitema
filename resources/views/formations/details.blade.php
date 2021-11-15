@extends('layout')

@section('content')
    <div class="container">

        <h1>Détails de la formation</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <img class="car-img-top" src="{{asset("storage/$formation->img")}}" alt="picture" style="object-fit: cover" height="200">
                </div>
                <div class="form-group">
                    <p class="font-weight-bolder">Titre :</p>
                    <p>{{$formation->title}}</p>
                </div>
                <div class="form-group">
                    <p class="font-weight-bolder">Description :</p>
                    <p>{{$formation->description}}</p>
                </div>
                <div class="form-group">
                    <p class="font-weight-bolder">Présentation :</p>
                    <p>{{$formation->presentation}}</p>
                </div>
                <div class="form-group">
                    <p class="font-weight-bolder">Prix : {{$formation->price}} €</p>
                </div>
                <div class="form-group">
                    <p class="font-weight-bolder">Auteur de la formation : {{$author->lastname}} {{$author->firstname}}</p>
                </div>
                <div class="form-group">
                    <p class="font-weight-bolder">Categorie : {{$category->name}}</p>
                </div>
                <div>
                    <h3>Les chapitres de la formation</h3>
                    @if(count($chaptersArray) > 0)
                        @foreach($chaptersArray as $chapter)
                            <div>
                                <p>Matière : {{$chapter->discipline}}</p>
                                <p>Sujet : {{$chapter->subject}}</p>
                                <p>Titre du chapitre : {{$chapter->title}}</p>
                            </div>
                        @endforeach
                    @else
                        <p>Pas encore de chapitres dans cette formation</p>
                    @endif
                </div>
            </div>
        </div>
@endsection
