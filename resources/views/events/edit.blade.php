@extends('layouts.main')

@section('title', 'Editando '. $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $event->title }}</h1>
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem do curso:</label>
            <input type="file" id="image" name="image" class="form-control-file">
            <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Curso:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do curso" value="{{ $event->title }}">
        </div>
        <div class="form-group">
            <label for="date">Data do curso:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
        </div>
        <div class="form-group">
            <label for="city">Local do curso:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{ $event->city }}">
        </div>
        <div class="form-group">
            <label for="title">O curso é grátes?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1" {{ $event->private ==1 ? "selected='selected'" : "" }}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="desc" id="desc" class="form-control" placeholder="O que vai acontecer no evento?">{{ $event->desc }}</textarea>
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Editar curso">
    </form>
</div>

@endsection