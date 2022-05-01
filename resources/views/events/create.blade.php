@extends('layouts.main')
@section('title','Criar Curso')
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie um curso</h1>
    <form action="/events"method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="image">Imagem do curso</label>
        <input type="file" id="image" name="image" class="from-control-file">
    </div>
    <div class="form-group">
        <label for="title">Curso:</label>
        <input type="text" class="form-control"id="title"name="title" placeholder="Nome do Curso">
    </div>
    <div class="form-group">
        <label for="date">Data de Início do curso:</label>
        <input type="date" class="form-control"id="date"name="date">
    </div>
    <div class="form-group">
        <label for="title">Local:</label>
        <input type="text" class="form-control"id="city"name="city" placeholder="Local do curso">
    </div>
   <div class="form-group">
        <label for="title">O curso é grates?</label>
        <select name="private" id="private" class="form-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Preço:</label>
        <input type="text" class="form-control"id="preço"name="preço" placeholder="Preço do Curso">
    </div>
    <div class="form-group">
        <label for="title">Descrição:</label>
        <div class="form-group">
            <textarea name="desc" id="desc" class="form-control" placeholder="Descrição do curso"></textarea>
        </div>
    
    <input type="submit" class="btn btn-primary" value="Criar Curso">
    </form>

</div>

@endsection