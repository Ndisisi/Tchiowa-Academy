@extends('layouts.main')
@section ('title',"Editar dados do Usuário {$user->name}")
@section ('content')
<h2>Editar dados do Usuário {{$user->name}}</h2>


@if ($errors->any())
<ul class="errors">
    @foreach ($errors->all() as $error)

    <li class="error">{{$error}}</li>
        
    @endforeach
</ul>
    
@endif



<form action="{{route('users.update', $user->id)}}" method="post">
    @method('PUT')
    @csrf
<input type="text" name="name" placeholder="Nome:" value="{{$user->name}}">
<input type="email" name="email" placeholder="Email:" value="{{$user->email}}">
<input type="password" name="password" placeholder="Senha:">
<button type="submit">Editar</button>
</form>


@endsection