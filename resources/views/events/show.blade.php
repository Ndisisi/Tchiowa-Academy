@extends('layouts.main')
@section('title',$event->title)
@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{$event->image}}" class="img-fluid"alt="{{$event->title}}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$event->title}}</h1>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{$event->city}}</p>
            <p class="events-participants"><ion-icon name="people-outline"></ion-icon>{{count($event->users)}} Alunos</p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon>Professor: {{$eventOwner['name']}}</p>
            <p class="event-city"><ion-icon name="cash"></ion-icon>{{$event->preço}}</p>
            @if(!$hasUserJoined)
            <form action="/events/join/{{$event->id}}" method="POST">
                @csrf
                <a href="/events/join/{{$event->id}}" 
                class="btn btn-primary" 
                id="event-submit" 
                onclick="event.preventDefault();
                this.closest('form').submit();">
                Inscrever-se ao curso</a>
                </form>
            @else
            <h6 class="already-joined-msg">Você está inscrito neste curso</h6>
            @endif
            
            
            </ul>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o Curso:</h3>
            <p class="event-description">{{$event->desc}}</p>
        </div>
    </div>

</div>


@endsection