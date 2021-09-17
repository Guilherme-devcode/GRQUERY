@extends('layouts.sidebarmenu')
@extends('layouts.footer')
@section('title', 'home')
@section('content')
@section('footer')


    <!-- Banner Image  -->
    <div id="search-container" class="col-md-12">
        <h1 class="text-white">GR QUERY</h1>
        <div class="search-box" align="center">
            <input class="search-txt" type="text" name="" placeholder="Faça a sua pesquisa">
            <a class="search-btn" href="#">
                <i class="fas fa-search"></i>
            </a>
        </div>
    </div>




    <br>

    <!-- Main Content Area -->
    <div id="about-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-about-title">Sobre a GR QUERY</h3>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="img/banner-2.jpg" alt="Agência hDC">
                </div>
                <div class="col-md-6">
                    <h3 class="about-title">Uma agência que pensa no futuro</h3>
                    <p>Nossos projetos são adaptados ao cliente e seu propósito.</p>
                    <p>empresa especializada em administração de consultas médicas, trazendo consigo uma ampla fonte de
                        opções para administrar e registrar consultas e agendamentos, atráves de um sistema utilizando banco
                        de dados e desenvolvimento web, garantido uma forma segura e eficáz de fazer agendamentos e cadastro
                        de pascientes. Com suporte da nossa equipe, quaisquer duvidas ou questionamentos será resolvida com
                        uma rápida equipe com missão de trazer satisfação para nossos clientes.</p>
                    <p>Funções do sistema</p>
                    <ul id="about-list">
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>Utilização de Machine Learning
                        </li>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon></i>Layout responsivo para todos os dispositivos
                        </li>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>Integração com diversos sistemas do mercado
                        </li>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>Sistema de pagamento próprio
                        </li>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>Desenvolvimento com metodologia ágil
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



@endsection
