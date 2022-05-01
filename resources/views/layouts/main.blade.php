<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class=" navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/corp1.png" alt="Tchiowa">
                    </a>
                    <ul class="navbar-nav">
                        
                        
                        @auth
                        
                        @if(auth()->user()->role == 'Admin')
                            <li class="nav-item">
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/cursos" class="nav-link">Cursos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link">Meus Cursos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/events/create" class="nav-link">Criar Cursos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/users" class="nav-link">Usuários</a>
                            </li>
                            <li class="nav-item">
                               <form action="/logout" method="POST">
                                   @csrf
                                   <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                               </form>
                            </li>
                        
                       

                        
                        @elseif(auth()->user()->role == 'Prof')

                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/cursos" class="nav-link">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar Cursos</a>
                        </li>
                        
                        <li class="nav-item">
                           <form action="/logout" method="POST">
                               @csrf
                               <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                           </form>
                        </li>


                        
                        @else
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/cursos" class="nav-link">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus Cursos</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                            </form>
                         </li>
                         @endif
                         
                        
                       
                        
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/cursos" class="nav-link">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar</a>
                        </li>
                       <!-- <li class="nav-item">
                            <a href="/" class="nav-link">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Fale Connosco</a>
                        </li>-->
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
        <footer>
            <p>Tchiowa Academy &copy; 2022</p> 
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    </body>
</html>
