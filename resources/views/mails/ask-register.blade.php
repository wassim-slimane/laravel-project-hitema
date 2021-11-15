<h1>Nouveau formateur</h1>

Prénom : {{$data['firstname']}}
Nom : {{$data['lastname']}}
Email : {{$data['email']}}
Password : {{$data['password']}}

<form action="{{route('register')}}" method="post">
    @csrf
    <input type="hidden" name="firstname" value="{{$data['firstname']}}">
    <input type="hidden" name="lastname" value="{{$data['lastname']}}">
    <input type="hidden" name="email" value="{{$data['email']}}">
    <input type="hidden" name="password" value="{{$data['password']}}">
    <button class="btn btn-primary" type="submit">Ajouter ce formateur</button>
</form>
