@extends('layouts.main')
@section ('title','Novo Usuário')
@section ('content')

@if ($errors->any())
<ul class="errors">
    @foreach ($errors->all() as $error)

    <li class="error">{{$error}}</li>
        
    @endforeach
</ul>
    
@endif


<h2>Novo Usuário</h2>

<form action="/users" method="post">
    @csrf
<input type="text" name="name" placeholder="Nome:">
<input type="email" name="email" placeholder="Email:">
<input type="password" name="password" placeholder="Senha:">
<button type="submit">Cadastrar</button>
</form>


@endsection