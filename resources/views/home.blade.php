@extends('layouts.sidebarmenu')
@section('title', 'home')
@section('content')


<!-- Banner Image  -->
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
  <div class="content text-center">
    <h1 class="text-white">GR QUERY</h1>
  </div>
</div>

<!-- Main Content Area -->
<div class="container my-5 d-grid gap-5">
  <div class="p-5 border">
    <p>
     TEXTO BASE.
    </p>
  </div>
  <div class="p-5 border">
    <p>
      TEXTO BASE.
    </p>
  </div>
  <div class="p-5 border">
    <p>
      TEXTO BASE.
    </p>
  </div>
  <div class="p-5 border">
    <p>
     TEXTO BASE.
    </p>
  </div>
</div>

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

@endsection 