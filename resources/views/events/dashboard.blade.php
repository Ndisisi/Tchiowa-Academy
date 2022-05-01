@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<style>
#a{
    text-align: end;
}
</style>
@if(auth()->user()->role == 'Admin')

<div class="col-md-10 offset-md-1 dashboard-title-container">

    <h1>Meus Cursos</h1>
    
    

</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    
    @if(count($events)>0)
    <table class="table">
        <thead>
            <tr>
                <th scop="col">#</th>
                <th scop="col">Nome</th>
                <th scop="col">Alunos</th>
                <th scop="col">Acções</th>
            </tr>
        </thead>
    
    <tbody>
        @foreach($events as $event)
        <tr>
            <td scope="row">{{$loop->index + 1}}</td>
            <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
            <td>{{count($event->users)}}</td>
            <td>
                <a href="/events/edit/{{$event->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a> 
                <form action="/events/{{$event->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    @else
    <p>Você ainda não tem cursos, <a href="/events/create">Criar Curso</a></p>
    @endif

    @endif
</div>

<div class="col-md-10 offset-md-1 dashboard-title-container">

    <h1>Cursos inscritos</h1>

</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($eventsasparticipant)>0)
 <table class="table">
        <thead>
            <tr>
                <th scop="col">#</th>
                <th scop="col">Nome</th>
                <th scop="col">Alunos</th>
                <th scop="col">Acções</th>
            </tr>
        </thead>
    
    <tbody>
        @foreach($eventsasparticipant as $event)
        <tr>
            <td scope="row">{{$loop->index + 1}}</td>
            <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
            <td>{{count($event->users)}}</td>
            <td>
            <form action="/events/leave/{{$event->id}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger delete-btn">
                <ion-icon name="trash-outline"></ion-icon>
                Sair do Curso
            </button>

            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table> 
    @else
    <p>Você ainda não se inscreveu a nenhum curso <a href="/">Veja todos os curso</a></p>
    @endif
</div>
@endsection