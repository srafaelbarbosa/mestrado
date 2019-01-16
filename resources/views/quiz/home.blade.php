
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ url('/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ url('css/clean-blog.min.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('quiz/home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('quiz/about') }}">Equipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('quiz/contact') }}">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->

    <header class="masthead" style="background-image: url({{ url('/img/home.jpg') }});">

      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Avaliação e Guia para Desenvolvimento de Softwares Educacionais</h1>
              <span class="subheading">Uma abordagem utilizando Indicadores e Determinantes de Inovação</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="{{ url('quiz/evaluate') }}">
              <h2 class="post-title">
                Avaliação de Softwares Educacionais pelos Indicadores de Inovação
              </h2>
              <h3 class="post-subtitle">
                Responda esse rápido questionário e avalie o Software Educacional desejado.
              </h3>
            </a>
          </div>
          <hr>
          <div class="post-preview">
            <a href="Quiz-Determinantes.html">
              <h2 class="post-title">
                Guia de desenvolvimento do Software Educacional pelos Determinantes de Inovação.
              </h2>
              <h3 class="post-subtitle">
                Avalie se seu desenvolvimento do Software Educacional está sendo realmente inovador.
              </h3>
            </a>
          </div>
          <hr>
          <!-- Pager -->
          <!--<div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>-->
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->

    <script type="text/javascript" src="{{ url('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Custom scripts for this template -->
    <script type="text/javascript" src="{{ url('/js/clean-blog.min.js') }}"></script>


  </body>

</html>
