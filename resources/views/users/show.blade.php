@extends('layouts.main')
@section ('title','Usuário')
@section ('content')

<h2>Informações do Usuário {{$user->name}}</h2>
<ul>

<li>{{$user->name }}</li>
<li>{{$user->email }}</li>

</ul>

<li>

<form action="{{route('users.edit', $user->id)}}">
   
    
    <button type="submit">Editar</button>
</form>
<form action="{{route('users.delete', $user->id)}}" method="POST">
    @method('DELETE')
    @csrf
    
    <button type="submit">Deletar</button>





</form>

</li>

@endsection