@extends('layout')

@section('content')

    <div class="container">

        <h1>Demander à s'inscrire</h1>

        @if($errors->any)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{route('ask-register')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Prénom</label>
                <input class="form-control" type="text" name="firstname">
            </div>
            <div class="form-group">
                <label>Nom</label>
                <input class="form-control" type="text" name="lastname">
            </div>
            <div class="form-group">
                <label>email</label>
                <input class="form-control" type="email" name="email">
            </div>
            <div class="form-group">
                <label>password</label>
                <input class="form-control" type="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer la demande</button>
        </form>
    </div>
@endsection
