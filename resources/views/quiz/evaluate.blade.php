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

    <style type="text/css">
      .margintop{
        margin-top: 2em;
      }
      li{
        border-bottom: 1px solid #ddd;
        padding-bottom: 1.5em;
        /*text-align: center;*/
      }
      .marginbottom{
        margin-bottom: 1em;
      }
      input[type="radio"]{
        display: block;
      }
      @media (max-width: 550px){
        .mobile-fs75em{
          font-size: .75em;
          /*margin-top: .5em;*/
        }
      }
    </style>

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
              <h1 align="center">Avaliação de Softwares Educacionais pelos Indicadores de Inovação</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

<!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">


          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          
          <div class="col-lg-8 col-md-10 mx-auto">
            <h3> <span class="label label-default">Avaliação de Softwares Educacionais</span></h3>
            
            <hr>
            <form method="POST" action="/quiz/evaluatesoftware">
             @csrf
              <div class="form-group row">
                  <label for="software" class="col-sm-2 col-form-label">Software</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="software" id="software" placeholder="Software para ser avaliado">
                  </div>
              </div>
              
              <hr>
              <ul class="px-0"> 
                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">O desenvolvimento do software é considerada a participação de algum especialista educacional?</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question1" value="1" required> 
                    <label for="question1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question1" value="2" required> 
                    <label for="question1">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question1" value="3" required> 
                    <label for="question1">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question1" value="4" required> 
                    <label for="question1">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question1" value="5" required> 
                    <label for="1">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>

                  <hr>
                </li>
           
                <li class="row form-group mx-0 margintop">

                  <h5 class="col-md-12 col-12 marginbottom">O produto de software é integrado com o currículo da instituição que será aplicado?</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question2" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question2" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question2" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question2" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question2" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>


                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">Existe preocupação sobre o registro do software?</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question3" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question3" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question3" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question3" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question3" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>

                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">O professor recebe um treinamento para melhor uso e entendimento do software?</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question4" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question4" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question4" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question4" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question4" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>

                  <hr>
                </li>
                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">Software pode ser usado como extensão fora da sala?</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question5" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question5" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question5" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question5" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question5" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">Software não requer alta capacidade  de processamento computacional</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question6" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question6" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question6" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question6" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question6" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">Software tem um custo de manutenção baixo</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question7" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question7" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question7" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question7" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question7" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">Software é de licença gratuita ou de baixo custo</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question8" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question8" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question8" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question8" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question8" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">O software permite uma avaliação e acompanhamento do desempenho individualizado do estudante</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question9" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question9" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question9" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question9" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question9" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">O software permite a aplicação fora da sala de aula?</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question10" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question10" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question10" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question10" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question10" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">O software permite a personalização do aprendizado?</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question11" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question11" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question11" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question11" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question11" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">O software foi testado por especialista?</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question12" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question12" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question12" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question12" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question12" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">O software está permitindo o trabalho em equipe?</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question13" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question13" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question13" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question13" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question13" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">O professor consegue acompanhar o progresso do aluno?</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question14" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question14" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question14" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question14" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question14" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">Software é intuitivo para uso independente do aluno?</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não Importante</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question15" value="1" required> 
                    <label for="1">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question15" value="2" required> 
                    <label for="2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question15" value="3" required> 
                    <label for="3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question15" value="4" required> 
                    <label for="4">4</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question15" value="5" required> 
                    <label for="5">5</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="5">Muito Importante</label>
                  
                  <hr>
                </li>

              </ul>
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
