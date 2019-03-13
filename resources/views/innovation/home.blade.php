
<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="shortcut icon" type="image/png" href="{{ url('/img/iconelogo.png')}}" >


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

    @include('partials.menu-partial')

    <!-- Page Header -->

    <header class="masthead" style="background-image: url({{ url('/img/home.jpg') }});">

      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <img src="{{ url('/img/logo2.png')}}" class="img-fluid" alt="Responsive image">
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
                Educadores, acessem esse link para responder sobre o Software Educacional já utilizado.
              </h3>
            </a>
          </div>
          <hr>
          <div class="post-preview">
            <a href="{{ url('innovation/softwares') }}">
              <h2 class="post-title">
                Resultado da avaliação dos educadores para Softwares Educacionais.
              </h2>
              <h3 class="post-subtitle">
                Aqui estão dispostos Determinantes de Inovação para guia do desenvolvimento de Softwares Educacionais inovadores.
              </h3>
            </a>
          </div>
          <div class="post-preview">
            <a href="{{ url('innovation/guide') }}">
              <h2 class="post-title">
                Guia de desenvolvimento do Software Educacional pelos Determinantes de Inovação.
              </h2>
              <h3 class="post-subtitle">
                Aqui estão dispostos Determinantes de Inovação para guia do desenvolvimento de Softwares Educacionais inovadores.
              </h3>
            </a>
            <hr>
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
