@extends('layouts.main')
@section ('title','Home')
@section ('content')

<style>
  .carousel-item{
    height:32rem;
    background: #777;
    color:white;
    position:relative;
    background-position:center;
    background-size:cover;
    text-align:center;
    
    
  }
  .container{
    position:absolute;
    bottom:0;
    left:0;
    right:0;
    padding-bottom:50px;
  }

#events-container{
  text-align:center;
}
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" 
    style="background-image:url(./img/5.jpg) ">
    
    <div class="container">
    <h1>Tchiowa Academy</h1>
    <p>Encontre aqui, os melhors cursos nacionais!</p>
    </div>
      
      
    </div>
    <div class="carousel-item" 
    style="background-image:url(./img/1.jpg)">
    

      <div class="container">
    <h1>Tchiowa Academy</h1>
    <p>Encontre aqui, os melhors cursos nacionais!</p>
    </div>
    </div>
    <div class="carousel-item" 
    style="background-image:url(./img/2.jpg)">

      <div class="container">
    <h1>Tchiowa Academy</h1>
    <p>Encontre aqui, os melhors cursos nacionais!</p>
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>












  <div id="search-container" class="col-md-12">
           <p>Busque por um curso</p> 
           <form action="/" mothod="GET">
           <input type="text" id="search" name="search" class="form-control" placeholder="Buscar curso...">

           </form>
   </div>
   <div id="events-container" class="col-md-12">
           @if($search)
           <h3>Buscando por: {{$search}}</h3>
           @else
           <h2>Cursos Disponíveis</h2>
           <!--<p class ="subtitle">  Veja os eventos dos próximos dias</p>-->
           <div id="cards-container" class="row">
           @endif
           

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
           @if(count($events)==0 && $search)
        <p>Não foi possível encontrar nenhum Curso com {{$search}}! <a href="/">Ver todos</a></p>
        @elseif(count($events)==0)
        <p>Não há Cursos disponíveis</p>
           @endif
           </div>
           
   </div>
         

  

@endsection
