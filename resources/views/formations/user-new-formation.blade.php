@extends('layout')

@section('content')

    <div class="container">

        <h1>Ajouter une formation</h1>

        @if($errors->any)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{route('store-formation')}}">
                    @csrf
                    <div class="form-group">
                        <label>Titre</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="form-group">
                        <label>Prix</label>
                        <input type="text" class="form-control" name="price" required>
                    </div>
                    <div class="form-group">
                        <label>Statut de publication</label>
                        <input type="checkbox" name="publicationStatus" value="true" checked>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Presentation</label>
                        <textarea class="form-control" name="presentation" rows="5" required ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="picture" required class="form-control" accept="image/jpg, image/png, image/jpeg">
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter</button>

                </form>
            </div>
        </div>

    </div>

@endsection
