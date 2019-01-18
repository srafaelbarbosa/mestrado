<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Determinantes de Inovação</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/css/bootstrap.min.css') }}"  rel="stylesheet">

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
    <header class="masthead" style="background-image: url({{ url('/img/evaluate.jpg') }});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1 align="center">Guia de Desenvolvimento de Softwares Educacionais por meio de Determinantes de Inovação</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

<!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <h3> <span class="label label-default">Avaliação de Softwares Educacionais</span></h3>
            
            <hr>
            <form method="POST" action="/quiz/evaluatesoftware">
             @csrf
              <div class="form-group row">
                  <label for="inputSoftware" class="col-sm-2 col-form-label">Software</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputSoftware" placeholder="Software para ser avaliado">
                  </div>
              </div>
              
              <hr>

              <h5>Pergunta 1</h5>
              
              <div class="radio">
                <label><input type="radio" name="question1" value="3"> Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question1" value="2"> Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question1" value="1"> Discorda</label>
              </div>

              <hr>

              <h5>Pergunta 2</h5>
              
              <div class="radio">
                <label><input type="radio" name="question2" value="3"> Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question2" value="2"> Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question2" value="1"> Discorda</label>
              </div>

              <hr>

              <h5>Pergunta 3</h5>
              
              <div class="radio">
                <label><input type="radio" name="question3" value="3">  Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question3" value="2">  Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question3" value="1">  Discorda</label>
              </div>

              <hr>

              <h5>Pergunta 4</h5>
              
              <div class="radio">
                <label><input type="radio" name="question4" value="3">  Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question4" value="2">  Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question4" value="1">  Discorda</label>
              </div>

              <hr>

              <h5>Pergunta 5</h5>
              
              <div class="radio">
                <label><input type="radio" name="question5" value="3">  Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question5" value="2">  Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question5" value="1">  Discorda</label>
              </div>
              
              <hr>

              <h5>Pergunta 6</h5>
              
              <div class="radio">
                <label><input type="radio" name="question6" value="3">  Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question6" value="2">  Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question6" value="1">  Discorda</label>
              </div>
              
              <hr>

              <h5>Pergunta 7</h5>
              
              <div class="radio">
                <label><input type="radio" name="question7" value="3">  Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question7" value="2">  Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question7" value="1">  Discorda</label>
              </div>
              
              <hr>

              <h5>Pergunta 8</h5>
              
              <div class="radio">
                <label><input type="radio" name="question8" value="3">  Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question8" value="2">  Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question8" value="1">  Discorda</label>
              </div>
              
              <hr>

              <h5>Pergunta 9</h5>
              
              <div class="radio">
                <label><input type="radio" name="question9" value="3">  Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question9" value="2">  Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question9" value="1">  Discorda</label>
              </div>
              
              <hr>

              <h5>Pergunta 10</h5>
              
              <div class="radio">
                <label><input type="radio" name="question10" value="3"> Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question10" value="2"> Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question10" value="1"> Discorda</label>
              </div>
              
              <hr>

              <h5>Pergunta 11</h5>
              
              <div class="radio">
                <label><input type="radio" name="question11" value="3"> Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question11" value="2"> Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question11" value="1"> Discorda</label>
              </div>
              
              <hr>

              <h5>Pergunta 12</h5>
              
              <div class="radio">
                <label><input type="radio" name="question12" value="3"> Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question12" value="2"> Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question12" value="1"> Discorda</label>
              </div>
              
              <hr>

              <h5>Pergunta 13</h5>
              
              <div class="radio">
                <label><input type="radio" name="question13" value="3"> Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question13" value="2"> Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question13" value="1"> Discorda</label>
              </div>
              
              <hr>

              <h5>Pergunta 14</h5>
              
              <div class="radio">
                <label><input type="radio" name="question14" value="3"> Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question14" value="2"> Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question14" value="1"> Discorda</label>
              </div>
              
              <hr>

              <h5>Pergunta 15</h5>
              
              <div class="radio">
                <label><input type="radio" name="question15" value="3"> Concorda</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question15" value="2"> Não sabe</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="question15" value="1"> Discorda</label>
              </div>
              
              <hr>
            
              <div align="center"> 
                <div>
                <button type="submit" class="btn btn-primary" >Enviar</button>
                <!-- <button type="submit" class="btn btn-primary">Refazer</button> -->
                </div>
              </div>
              <hr>
            </form>
          <div>
        <div>
      </div> 
    </article>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ url('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script type="text/javascript" src="{{ url('/js/clean-blog.min.js') }}"></script>

  </body>

</html>
