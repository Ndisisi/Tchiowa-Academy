@extends('layouts.main')
@section ('title','Cursos')
@section ('content')

<div id="allone" class="col-md-12">
           <h1>Todos os cursos</h1>


           </div>
           @foreach($events as $event)
           <div class="card col-md-3">
           <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}">
           
           
           <div class="card-body">
                   <p class="card-date">{{date('d/m/Y',strtotime($event->date))}}</p>
                   <h5 class="card-title">{{ $event -> title }}</h5>
                   <p class="card-participants">Inscreva-te já</p>
                   <a href="/events/{{$event->id}}" class="btn btn-primary"> Saber mais</a>
           </div>
           </div>
           @endforeach

@endsection