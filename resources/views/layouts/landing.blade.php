<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <style>
      html,
      body,
      header,
      .intro-4 {
        height: 100%;
      }
      @media (max-width: 450px) {
        html,
        body,
        header,
        .intro-4 {
          height: 700px;
        }
      }
      @media (min-width: 451px) and (max-width: 740px) {
        html,
        body,
        header,
        .intro-4 {
          height: 500px;
        }
      }
      @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .intro-4 {
          height: 550px;
        }
      }
    </style>
</head>
  
<body>
      <!-- Navigation & Intro -->
  <!-- Navigation & Intro -->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar white">
      <div class="container">
        <a class="navbar-brand font-weight-bold title" href="../home/main.html">Brand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="list-unstyled navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link title" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link title" href="#features" data-offset="90">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link title" href="#pricing" data-offset="90">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link title" href="#about" data-offset="90">About</a>
            </li>
          </ul>
          <!-- Social Icon  -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-facebook-f title"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-twitter title"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-instagram title"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Section -->
    <section class="view intro-4" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;" id="home">
      <div class="mask rgba-indigo-light">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12 wow fadeIn mb-3">
              <div class="text-center white-text">
                <ul class="list-unstyled">
                  <li>
                    <h1 class="display-4 mt-md-5 mt-lg-0 mb-5 font-weight-bold white-text wow fadeIn"
                      data-wow-delay="0.3s">
                      <strong>Clean Modern Layout For Your Web</strong>
                    </h1>
                  </li>
                  <li>
                    <h5 class="white-text description mb-5 wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet,
                      consectetur adipisicing elit. Rem repellendus quasi fuga
                      nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi
                      ea dolor molestiae iste.
                    </h5>
                  </li>
                  <li class="wow fadeIn" data-wow-delay="0.4s">
                  <a href="{{ route('login')}}" class="btn pink-gradient btn-rounded btn-lg font-weight-bold">Login</a>
                    <a class="btn btn-white btn-rounded btn-lg orange-text font-weight-bold ml-lg-0">
                      <i class="fas fa-play-circle orange-text mr-2" aria-hidden="true"></i> Watch demo</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </header>
  <!-- Navigation & Intro -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
      <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/mdb.js')}}"></script>
  <script>
    // Animation init
    new WOW().init();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });
  </script>
</body>
</html>
