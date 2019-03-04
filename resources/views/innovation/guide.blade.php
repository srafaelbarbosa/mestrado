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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ url('css/clean-blog.min.css') }}" rel="stylesheet">

    <style type="text/css">
      .margintop{
        margin-top: 2em;
      }
      ul{
        padding-left:0;
        list-style: none;
      }
      .determinantes-list li{
        padding: .85em;
        color: #fff;
        font-size: 1em;
        cursor: pointer;
        text-align: center;
        border: 1px solid #fff;
      }
      .determinantes-list li:hover{
        opacity: .7;
      }
      .determinantes-list li i{
        margin-bottom: .5em;
      }
      .determinantes-list li h5{
        font-weight: 700;
      }
      .determinantes-list li.tecnica{
        background-color: #45b0e5;
      }
      .determinantes-list li.colaboracao{
        background-color: #ff884d;
      }
      .determinantes-list li.comunicacao{
        background-color: #9065e5;
      }
      .marginbottom{
        margin-bottom: 1em;
      }
      input[type="radio"], .block{
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
              <a class="nav-link" href="{{ url('innovation/home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('innovation/about') }}">Equipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('innovation/contact') }}">Contato</a>
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
              <h1 align="center">Determinantes de Inovação para Softwares Educacionais</h1>
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
            <h4> <span class="label label-default">Aqui estão listados os Determinantes de Inovação para Softwares Educacionais. Estão dispostos por categorias e clicando neles, você poderá ter uma melhor descrição, a categoria e a referência.</span></h4>
            
            <hr>
            
            <div class="container-fluid determinantes-list"> 
                <ul class="row">
                  <li class="col-md-4 col-xs-6 tecnica" data-toggle="modal" data-target="#d01">
                    <i class="fas fa-tools"></i>
                    <h5>Software fornece suporte a atividades extraclasse</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 tecnica" data-toggle="modal" data-target="#d02">  
                      <i class="fas fa-tools"></i>
                      <h5>Software experimentado e avaliado antes da distribuição</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 tecnica">
                      <i class="fas fa-tools"></i>  
                      <h5>Software fornece suporte a atividades extraclasse</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 tecnica">  
                      <i class="fas fa-tools"></i>
                      <h5>Software fornece suporte a atividades extraclasse</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 tecnica">
                      <i class="fas fa-tools"></i>  
                      <h5>Software fornece suporte a atividades extraclasse</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 colaboracao">
                      <i class="fas fa-people-carry"></i>  
                      <h5>Software permite a personalização do aprendizado através de conteúdo adaptativo às necessidades do estudante</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 colaboracao"> 
                      <i class="fas fa-people-carry"></i> 
                      <h5>Software fornece suporte a atividades extraclasse</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 colaboracao"> 
                      <i class="fas fa-people-carry"></i> 
                      <h5>Software fornece suporte a atividades extraclasse</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 colaboracao"> 
                      <i class="fas fa-people-carry"></i> 
                      <h5>Software fornece suporte a atividades extraclasse</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 comunicacao">  
                      <i class="fas fa-comments"></i>
                      <h5>Software fornece suporte a atividades extraclasse</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 comunicacao">  
                      <i class="fas fa-comments"></i>
                      <h5>Software fornece suporte a atividades extraclasse</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 comunicacao">  
                      <i class="fas fa-comments"></i>
                      <h5>Software fornece suporte a atividades extraclasse</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 comunicacao">  
                      <i class="fas fa-comments"></i>
                      <h5>Software fornece suporte a atividades extraclasse</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 comunicacao">  
                      <i class="fas fa-comments"></i>
                      <h5>Software fornece suporte a atividades extraclasse</h5>
                  </li>                  
                </ul>









                <!-- Modal -->
                <div class="modal fade" id="d01" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software fornece suporte a atividades extraclasse</h5>
                        <br>
                        <span class="badge badge-light">Técnica</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>O software pode ser acessado e utilizado para realização de atividades extraclasse, fora da sala de aula.</p>
                        <hr>
                        <small class="block">HOSIE, P., SCHIBECI, R., & BACKHAUS, A.: A framework and checklists for evaluating online learning in higher education. Assessment & Evaluation in Higher Education, 30(5), 539-553, 2005.</small>
                        <small class="block">PEÑA-LÓPEZ, I.: Students, Computers and Learning. Making the Connection, 2015.
                        </small>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="d02" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software fornece suporte a atividades extraclasse</h5>
                        <br>
                        <span class="badge badge-light">Técnica</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Uma versão beta do software educacional é disponibilizada e avaliada por estudantes, professores e especialistas para coleta de feedback para melhorias da versão final.</p>
                        <hr>
                        <small class="block">VALIENTE, O.: 1-1 in Education: Current Practice, International Comparative Research Evidence and Policy Implications. OECD Education Working Papers, No. 44. OECD Publishing (NJ1), 2010.</small>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>




            </div>
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
