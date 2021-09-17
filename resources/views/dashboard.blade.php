@extends('layouts.footer')
@section('title', 'Dashboard')
@section('footer')

<link href="{{ asset('/css/sidebar.css') }}" rel="stylesheet">

<!-- barra de menu lateral -->

    <aside id="header">
        <section class="profile">
            <img src="../img/usuario.jpg" alt="foto do usuario">
            <h1>Usuario</h1>
        </section>

    <nav id="navbar" class="nav-menu">
        <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house"></i>Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-file-earmark-medical"></i>Todas as consulas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-pen"></i>Cadastro de Consultas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-clipboard"></i>Relatorios</a>
            </li>
          </ul>

    </nav>

    </aside>




@endsection