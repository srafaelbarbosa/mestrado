<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="shortcut icon" type="image/png" href="{{ url('/img/iconelogo.png')}}" >

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
              <h1 align="center">Determinantes de Inovação para Softwares de Suporte à Educação</h1>
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
            <h2>Determinantes de Inovação Educacionais</h2>
            <p class="text-justify">Os Determinantes de Inovação vão servir como um guia para desenvolvimento de Softwares de suporte à educação Inovadores.
            Estão dispostos por categorias e clicando neles, você poderá ter uma melhor descrição, a categoria e a referência. </p>
            <p class="text-justify">Foram consideradas duas categorias para os Determinantes: </p>
            <span class="badge badge-primary">Técnico</span>
            <br>
            <span class="badge badge-warning">Pedagógico</span>

            
            <hr>
            
            <div class="container-fluid determinantes-list"> 
                <ul class="row">
                  <li class="col-md-4 col-xs-6 tecnico" data-toggle="modal" data-target="#d01">
                    <i class="fas fa-tools fa-3x"></i>
                    <h5>Software não requer alta capacidade de processamento computacional</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 tecnico" data-toggle="modal" data-target="#d02">  
                      <i class="fas fa-tools fa-3x"></i>
                      <h5>Software tem participação ativa dos professores no processo de desenvolvimento </h5>
                  </li>
                  <li class="col-md-4 col-xs-6 tecnico" data-toggle="modal" data-target="#d03">
                      <i class="fas fa-tools fa-3x"></i>  
                      <h5>Manutenibilidade do software</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 tecnico" data-toggle="modal" data-target="#d04">  
                      <i class="fas fa-tools fa-3x"></i>
                      <h5>Proficiência do professor em usar o software</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 tecnico" data-toggle="modal" data-target="#d05">
                      <i class="fas fa-tools fa-3x"></i>  
                      <h5>Disponibilidade do software</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 tecnico" data-toggle="modal" data-target="#d07"> 
                    <i class="fas fa-tools fa-3x"></i>  
                      <h5>Software experimentado e avaliado antes da distribuição</h5>
                  </li>
                  </li>
                  <li class="col-md-4 col-xs-6 pedagogico" data-toggle="modal" data-target="#d06">
                    <i class="fas fa-chalkboard-teacher fa-3x"></i>
                    <h5>Software disponibiliza feedback das atividades realizadas</h5>
                  <li class="col-md-4 col-xs-6 pedagogico" data-toggle="modal" data-target="#d08"> 
                    <i class="fas fa-chalkboard-teacher fa-3x"></i>
                      <h5>Software dispõe de ambiente desafiador e recompensa os estudantes.</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 pedagogico" data-toggle="modal" data-target="#d09"> 
                    <i class="fas fa-chalkboard-teacher fa-3x"></i>
                      <h5>Software integra a participação dos pais no processo de aprendizagem dos estudantes</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 pedagogico" data-toggle="modal" data-target="#d10">  
                    <i class="fas fa-chalkboard-teacher fa-3x"></i>
                      <h5>Software é usado para integrar ao currículo escolar.</h5>
                  </li>
                  <li class="col-md-4 col-xs-6 pedagogico" data-toggle="modal" data-target="#d11">  
                    <i class="fas fa-chalkboard-teacher fa-3x"></i>
                      <h5>Software disponibiliza ao professor a avaliação formativa do estudante.</h5>
                  </li>               
                </ul>
                <hr>


                <!-- Modal -->
                <div class="modal fade" id="d01" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software não requer alta capacidade de processamento computacional</h5>
                        <br>
                        <span class="badge badge-primary">Técnico</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>O software funciona em máquinas (ex: microcomputadores, dispositivos móveis, etc.) com configuração básica.</p>
                        <hr>
                        <small class="block">VALIENTE, O.: 1-1 in Education: Current Practice, International Comparative Research Evidence and Policy Implications. OECD Education Working Papers, No. 44. OECD Publishing (NJ1), 2010.</small>
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
                        <h5 class="modal-title" id="exampleModalLongTitle">Software tem participação ativa dos professores no processo de desenvolvimento</h5>
                        <br>
                        <span class="badge badge-primary">Técnico</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Professores participam desde a concepção (geração de ideias) até os testes funcionais (avaliação e verificação) do software educacional.</p>
                        <hr>
                        <small class="block">VALIENTE, O.: 1-1 in Education: Current Practice, International Comparative Research Evidence and Policy Implications. OECD Education Working Papers, No. 44. OECD Publishing (NJ1), 2010.</small>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="d03" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Manutenibilidade do software</h5>
                        <br>
                        <span class="badge badge-primary">Técnico</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Facilidade, precisão, segurança e economia na execução de ações de manutenção nesse sistema ou produto.</p>
                        <hr>
                        <small class="block">OECD: Future of Work and Skills, Paper presented at the 2nd Meeting of the G20 Employment Working Group, Hamburg, Germany, 2017.</small>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="d04" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Proficiência do professor em usar o software</h5>
                        <br>
                        <span class="badge badge-primary">Técnico</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Nível de capacitação do professor em usar o software nas atividades de ensino.</p>
                        <hr>
                        <small class="block">AVVISATI, F., HENNESSY, S., KOZMA, R. B., & VINCENT-LANCRIN, S.: Review of the Italian strategy for digital schools, 2013.</small>
                        <small class="block">OECD: Future of Work and Skills, Paper presented at the 2nd Meeting of the G20 Employment Working Group, Hamburg, Germany, 2017.</small>
                        <small class="block">VALIENTE, O.: 1-1 in Education: Current Practice, International Comparative Research Evidence and Policy Implications. OECD Education Working Papers, No. 44. OECD Publishing (NJ1), 2010.</small>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="d05" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Disponibilidade do software</h5>
                        <br>
                        <span class="badge badge-primary">Técnico</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Nível de disponibilidade (ex: qualquer lugar, qualquer hora, etc.) do software educacional para uso pelos estudantes.</p>
                        <hr>
                        <small class="block">ISTANCE, David; KOOLS, Marco. OECD work on technology and education: Innovative learning environments as an integrating framework. European Journal of Education, v. 48, n. 1, p. 43-57, 2013.</small>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="d06" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software disponibiliza feedback das atividades realizadas</h5>
                        <br>
                        <span class="badge badge-warning">Pedagógico</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Feedback sobre o desempenho dos estudantes nas atividades de aprendizagem realizadas por meio do software.</p>
                        <hr>
                        <small class="block">OECD: Future of Work and Skills, Paper presented at the 2nd Meeting of the G20 Employment Working Group, Hamburg, Germany, 2017.</small>
                        <small class="block">VALIENTE, O.: 1-1 in Education: Current Practice, International Comparative Research Evidence and Policy Implications. OECD Education Working Papers, No. 44. OECD Publishing (NJ1), 2010.</small>
                        <small class="block">VERASZTO, E. V., do AMARAL, S. F., & BARRETO, G.: Ambientes Tecnológicos Interativos e Educação: Uma Proposta para Inovação Tecnológica. Revista InovaEduc, 1, 1, 2013.</small>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="d07" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software experimentado e avaliado antes da distribuição</h5>
                        <br>
                        <span class="badge badge-primary">Técnico</span>
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="d08" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software dispõe de ambiente desafiador e recompensa os estudantes</h5>
                        <br>
                        <span class="badge badge-warning">Pedagógico</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Software utiliza gamificação para prover funcionalidades baseadas em níveis de dificuldades e recompensas.</p>
                        <hr>
                        <small class="block">BOOYENS, I., MOLOTJA, N., & PHIRI, M. Z.: Innovation in high-technology SMMEs: the case of the new media sector in Cape Town. In Urban Forum (Vol. 24, No. 2, pp. 289-306). Springer Netherlands, 2013.</small>
                        <small class="block">HOSIE, P., SCHIBECI, R., & BACKHAUS, A.: A framework and checklists for evaluating online learning in higher education. Assessment & Evaluation in Higher Education, 30(5), 539-553, 2005.</small>
                        <small class="block">ISTANCE, David; KOOLS, Marco. OECD work on technology and education: Innovative learning environments as an integrating framework. European Journal of Education, v. 48, n. 1, p. 43-57, 2013.</small>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="d09" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software integra a participação dos pais no processo de aprendizagem dos estudantes</h5>
                        <br>
                        <span class="badge badge-warning">Pedagógico</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Os pais são integrados no processo de avaliação dos estudantes para acompanhamento do desempenho bem como repasse de atividades específicas.</p>
                        <hr>
                        <small class="block">OECD: Future of Work and Skills, Paper presented at the 2nd Meeting of the G20 Employment Working Group, Hamburg, Germany, 2017.</small>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="d10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software é usado para integrar ao currículo escolar</h5>
                        <br>
                        <span class="badge badge-warning">Pedagógico</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Nível de integração do software educacional às bases curriculares da instituição de ensino usuária.</p>
                        <hr>
                        <small class="block">HOSIE, P., SCHIBECI, R., & BACKHAUS, A.: A framework and checklists for evaluating online learning in higher education. Assessment & Evaluation in Higher Education, 30(5), 539-553, 2005.</small>
                        <small class="block">ISTANCE, David; KOOLS, Marco. OECD work on technology and education: Innovative learning environments as an integrating framework. European Journal of Education, v. 48, n. 1, p. 43-57, 2013.</small>
                        <small class="block">VALIENTE, O.: 1-1 in Education: Current Practice, International Comparative Research Evidence and Policy Implications. OECD Education Working Papers, No. 44. OECD Publishing (NJ1), 2010.</small>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="d11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Software disponibiliza ao professor a avaliação formativa do estudante</h5>
                        <br>
                        <span class="badge badge-warning">Pedagógico</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Software permite a avaliação e acompanhamento do desempenho individualizado do estudante.</p>
                        <hr>
                        <small class="block">ISTANCE, David; KOOLS, Marco. OECD work on technology and education: Innovative learning environments as an integrating framework. European Journal of Education, v. 48, n. 1, p. 43-57, 2013.</small>
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
