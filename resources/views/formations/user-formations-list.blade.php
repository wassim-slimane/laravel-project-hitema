@extends('user-layout')

@section('content')

    <div>
        <a class="btn btn-primary btn-sm" href="{{route('new-formation')}}">Ajouter une formation</a>
    </div>

    <div>
        @foreach($formations as $formation)
            <div class="col-md-4">
                <div class="card">
                    @if($formation->img)
                        <img class="car-img-top" src="{{asset("storage/$formation->img")}}" alt="picture" style="object-fit: cover" height="200">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$formation->title}}</h5>
                        <p>{{$formation->description}}</p>

                        <div>
                            <a href="{{route('update-formation-details', $formation->id)}}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{route('delete-formation', $formation->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
