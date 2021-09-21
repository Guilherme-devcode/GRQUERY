@extends('layouts.footer')
@section('title', 'Dashboard')
@section('footer')

    <link href="{{ asset('/css/sidebar.css') }}" rel="stylesheet">

    <!-- barra de menu lateral -->

    <aside id="header">
        <section class="profile">
            <img src="../img/usuario.jpeg" alt="foto do usuario">
            <h1>Usuario</h1>
        </section>

        <nav id="navbar" class="nav-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house"></i>Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-file-earmark-medical"></i>Todas as Consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-pen"></i>Cadastro de Consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-clipboard"></i>Relatorios</a>
                </li>
                @auth
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault();
                      this.closest('form').submit();">
                                <i class="bi bi-box-arrow-left"></i>
                                Sair
                            </a>
                        </form>
                    </li>
                @endauth
            </ul>
        </nav>
    </aside>

    <!--incio-->
    <header>
        <div id="search-container" class="col-md-12">
            <div class="search-box" align="center">
                <input class="search-txt" type="text" name="" placeholder="Pesquise uma consulta">
                <a class="search-btn" href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </div>
    </header>
    <main id="main">
        <h2 class="h2-table">Próximas consultas</h2>
        <p class="p-table">Veja as próximas consultas</p>
        <section class="table">
            <div>
                <!--tabela de consultas-->
                    @foreach ($consultas as $consulta)
                    <div class="card-body">
                        <p class="card-date">Data da Consulta:  {{date('d/m/y' , strtotime($consulta->DataConsulta))}}</p>
                        <h5 class="card-title">{{$consulta->DiagnosticoConsulta}}</h5>
                    </div>
                    @endforeach
        </section>
    </main>


@endsection
