<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="{{asset('/css/styles.css')}}" rel="stylesheet">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


</head>

<body>
  @yield('content')
  <body>

    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="#">GR QUERY</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Consultas</a>
            </li>
            @auth
            <li class="nav-item">
              <a class="nav-link text-white" href="/dashboard">Tabela de consultas</a>
            </li>
            <li class="nav-item">
              <form action="/logout" method="POST">
              @csrf
              <a href="/logout" 
              class="nav-link text-white" 
              onclick="event.preventDefault();
              this.closest('form').submit();">
              Sair
            </a>
              </form>
          </li>
            @endauth
            @guest
            <li class="nav-item">
              <a class="nav-link text-white" href="/login">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/register">Cadastrar</a>
            </li>
            @endguest
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


<!-- footer -->

<footer>
  <div class="container">
      <div class="footer-content">
          <div class="items">
              <a href="#" class="logo">GR QUERY</a>  
              <p> teste.</p>
              <div class="social">

              </div>
          </div>
          <div class="items">
              <h3> TESTE</h3>
              <ul>

              </ul>                          
          </div>

          <div class="items">
              <h3>TESTE</h3>
          <ul>

          </ul>
          </div>
          <div class="items">
              <h3>TESTE</h3>
              <ul>

              </ul>
          </div>
      </div>
      <hr>
      <p class="end">Copyright © 2021 por Guilherme-devcode. Todos os direitos reservados.</p>
  </div>
</footer>



<!--navbar transparente js -->
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
  var nav = document.querySelector('nav');
  window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
      nav.classList.add('bg-dark', 'shadow');
    } else {
      nav.classList.remove('bg-dark', 'shadow');
    }
  });
</script>

</body>
</html>
