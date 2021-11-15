@extends('layout')

@section('content')

    <div class="container">

        <h1>Modifier votre formation</h1>

        @if($errors->any)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{route('update-formation', $formation->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Titre</label>
                        <input type="text" class="form-control" name="title" required value="{{$formation->title}}">
                    </div>
                    <div class="form-group">
                        <label>Prix</label>
                        <input type="text" class="form-control" name="price" required value="{{$formation->price}}">
                    </div>
                    <div class="form-group">
                        <label>Statut de publication</label>
                        <input type="checkbox" name="publicationStatus" @if($formation->publicationStatus) value="true" checked @endif">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="5" required>{{$formation->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Presentation</label>
                        <textarea class="form-control" name="presentation" rows="5" required >{{$formation->presentation}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Modifier</button>

                </form>
                <p>Ecrit le {{$formation->updated_at->format('d F Y')}}</p>
            </div>
            <div class="col-md-6">
                <form method="post" action="{{route('update-formation-picture', $formation->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Modifier l'image de la formation</label>
                        <input type="file" name="picture" required class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>

        <div class="d-flex">
            <a href="{{route('dashboard')}}" class="btn btn-primary">Retourner à la liste des formations</a>
            <form method="post" action="{{route('delete-formation', $formation->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer cette formation</button>
            </form>
        </div>
    </div>

@endsection
