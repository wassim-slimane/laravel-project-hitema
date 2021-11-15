@extends('layout')

@section('content')
<div id="home-page">
    <div>
        <h3>Afficher selon une catégorie :</h3>
        <a class="btn btn-primary" href="{{route('formationsListCategory', 'concours')}}">Concours</a>
        <a class="btn btn-primary" href="{{route('formationsListCategory', 'certification')}}">Certifications</a>
        <a class="btn btn-primary" href="{{route('formationsListCategory', 'VAE')}}">VAE</a>
    </div>


    @foreach($formations as $formation)
        <div class="col-md-4">
            <div class="card">
                @if($formation->img)
                    <img class="car-img-top" src="{{asset("storage/$formation->img")}}" alt="picture" style="object-fit: cover" height="200">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{$formation->title}}</h5>
                    <p>{{$formation->description}}</p>

                    <div class="d-flex">
                        <a href="{{route('formationsDetails', $formation->id)}}" class="btn btn-primary">Détails</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
