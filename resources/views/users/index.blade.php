@extends('layouts.main')
@section ('title','Usuários')
@section ('content')

<h2>
       Listagem dos Usuários
       | <a href="/users/create">Criar</a> |
</h2>
<ul>
@foreach($users as $user)

<li>
       {{$user->name }}
       |<a href="/users/{{$user->id}}"> Detalhes</a>
       
</li>



@endforeach
</ul>

@endsection