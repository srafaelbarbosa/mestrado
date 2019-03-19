<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="shortcut icon" type="image/png" href="{{ url('/img/iconelogo.png')}}" >

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Indicadores de Inovação</title>

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
      .determinantes-list li.tecnico{
        background-color: #45b0e5;
      }
      .determinantes-list li.pedagogico{
        background-color: #ff884d;
      }
      .determinantes-list li.indicador{
        background-color: #ff3f3f;
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

    @include('partials.menu-partial')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ url('/img/evaluate.jpg') }});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1 align="center">Indicadores de Inovação para Softwares de Suporte à Educação</h1>
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
            <div class="container-fluid determinantes-list"> 
                <h2 align="center">Indicadores de Inovação Educacionais</h2>
                 <p class="text-justify">Estão aqui listados para que saibam como os softwares serão avaliados nesta ferramenta, uma espécie de Desenvolvimento Orientado a Testes (TDD). Já sabendo quais os pontos em que os softwares serão avaliados para serem considerados inovadores, sem a necessidade de fazer toda implementação do software para depois avaliar.</p>
                 <p class="text-justify">Aqui os softwares de suporte à educação serão avaliados como habilitador das habilidades e competências do Século XXI.</p>
                 <ul class="row">
                   <li class="col-md-4 col-xs-6 indicador" data-toggle="modal" data-target="#i01">
                    <i class="fas fa-hiking fa-3x"></i>
                    <h5>Aprendizado autônomo e autodirigido</h5>
                   </li>
                   <li class="col-md-4 col-xs-6 indicador" data-toggle="modal" data-target="#i02">  
                       <i class="fas fa-chalkboard fa-3x"></i>
                       <h5>Adaptação a diferentes modos e paradigmas de aprendizagem</h5>
                   </li>
                   <li class="col-md-4 col-xs-6 indicador" data-toggle="modal" data-target="#i03">
                       <i class="fas fa-book-reader fa-3x"></i> 
                       <h5>Aprendizado personalizado</h5>
                   </li>
                   <li class="col-md-4 col-xs-6 indicador" data-toggle="modal" data-target="#i04"> 
                      <i class="fas fa-hands-helping fa-3x"></i>  
                       <h5>Contribuição individual em um esforço coletivo para realização de uma tarefa</h5>
                   </li>
                   <li class="col-md-4 col-xs-6 indicador" data-toggle="modal" data-target="#i05">
                    <i class="fas fa-people-carry fa-3x"></i>
                    <h5>Aprendizado em pares</h5>
                   </li>
                   <li class="col-md-4 col-xs-6 indicador" data-toggle="modal" data-target="#i06">
                      <i class="fas fa-comments fa-3x"></i>
                     <h5>Comunicação entre indivíduos</h5>
                   </li>
                   <li class="col-md-4 col-xs-6 indicador" data-toggle="modal" data-target="#i07"> 
                      <i class="fas fa-lightbulb fa-3x"></i>
                      <h5>Comunicação criativa do aprendizado</h5>
                   </li>
                   <li class="col-md-4 col-xs-6 indicador" data-toggle="modal" data-target="#i08"> 
                    <i class="fas fa-tasks fa-3x"></i>
                    <h5>Resolução criativa de problemas.</h5>
                   </li>
                   <li class="col-md-4 col-xs-6 indicador" data-toggle="modal" data-target="#i09"> 
                     <i class="fas fa-sync-alt fa-3x"></i>
                       <h5>Transformação do conhecimento</h5>
                   </li>                
                 </ul>
                 <hr>

                <!-- Modal -->
                <div class="modal fade" id="i01" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software como habilitador do aprendizado autônomo e autodirigido</h5>
                        <br>
                        <span class="badge badge-danger">Indicador</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Possibilitar ao estudante aprender por si só, definir seus objetivos de aprendizagem, planejar e monitorar seu próprio aprendizado, avaliar o progresso e tomar ações a partir do resultado.</p>
                        <hr>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="i02" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software como habilitador da adaptação a diferentes modos e paradigmas de aprendizagem</h5>
                        <br>
                        <span class="badge badge-danger">Indicador</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Possibilitar ao estudante se adaptar a diferentes formas de aprendizado, como por exemplo, aprendizagem ativa, gamificação.</p>
                        <hr>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="i03" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software como habilitador do aprendizado personalizado</h5>
                        <br>
                        <span class="badge badge-danger">Indicador</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Possibilitar ao estudante aprender no seu próprio ritmo e nível de proficiência.</p>
                        <hr>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="i04" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software como habilitador da contribuição individual em um esforço coletivo para realização de uma tarefa</h5>
                        <br>
                        <span class="badge badge-danger">Indicador</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Possibilitar a colaboração do estudante no trabalho em equipe.</p>
                        <hr>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="i05" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software como habilitador do aprendizado em pares</h5>
                        <br>
                        <span class="badge badge-danger">Indicador</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Possibilitar ao estudante compartilhar o conhecimento e aprender ensinando.</p>
                        <hr>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="i06" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software como habilitador da comunicação entre indivíduos</h5>
                        <br>
                        <span class="badge badge-danger">Indicador</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Possibilitar ao estudante interagir e trocar informações de maneira síncrona (ex: chats, videoconferência, etc.) e assíncrona (ex: fórum de discussão, e-mail, etc.).</p>
                        <hr>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="i07" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software como habilitador da comunicação criativa do aprendizado</h5>
                        <br>
                        <span class="badge badge-danger">Indicador</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Possibilitar ao estudante demonstrar um conhecimento adquirido (internalizado) de maneira criativa (ex: contando uma história).</p>
                        <hr>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="i08" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software como habilitador da resolução criativa de problemas</h5>
                        <br>
                        <span class="badge badge-danger">Indicador</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Possibilitar ao estudante usar o pensamento divergente para encontrar diferentes alternativas/ideias para solução de um problema e então usar o pensamento convergente para fazer a escolha da melhor solução entre as encontradas.</p>
                        <hr>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="i09" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software como habilitador da transformação do conhecimento</h5>
                        <br>
                        <span class="badge badge-danger">Indicador</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Possibilitar ao estudante externalizar (codificar/explicitar) um conhecimento adquirido ou recombinar (sintetizar) diferentes peças do conhecimento em uma nova forma.</p>
                        <hr>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
