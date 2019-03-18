<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="shortcut icon" type="image/png" href="{{ url('/img/iconelogo.png')}}" >

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Avaliação de Softwares de Suporte à Educação</title>

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

    @include('partials.menu-partial')

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
            
            <p>Nesta etapa você deve selecionar qual Software será avaliado, de acordo com o e-mail recebido.</p>
            <p>Após a leitura, selecione o nível de quanto o software atende o Indicador de Inovação, considerando as seguintes opções: 1 - Não sei; 2 - Não Atende; 3 - Atende Parcialmente; 4 - Atende Plenamente.</p>
            <hr> 
            <form method="POST" action="/quiz/evaluatesoftware">
             @csrf
              <div class="form-group row">
                  <label for="software" class="col-sm-2 col-form-label">Software</label>
                  <div class="dropdown">

                    <div class="form-group">
                      <select name="software" class="form-control" id="" required>
                        <option value="">Selecione</option>
                        <option>Scratch</option>
                        <option>Moodle</option>
                        <option>Google Suite (Docs, Planilhas, etc.)</option>
                        <option>App Inventor</option>                        
                        <option>Google Classroom</option>                        
                        <option>Lighbot</option>                        
                      </select>
                    </div>
                  </div>
              </div>
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
              <hr>
              <ul class="px-0"> 
                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">[I01] Software como habilitador do aprendizado autônomo e autodirigido</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não sei</label>
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
                    <label for="1">4</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="4">Atende Plenamente</label>

                  <hr>
                </li>
           
                <li class="row form-group mx-0 margintop">

                  <h5 class="col-md-12 col-12 marginbottom">[I02] Software como habilitador da adaptação a diferentes modos e paradigmas de aprendizagem</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não sei</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question2" value="1" required> 
                    <label for="question2">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question2" value="2" required> 
                    <label for="question2">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question2" value="3" required> 
                    <label for="question2">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question2" value="4" required> 
                    <label for="1">4</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="4">Atende Plenamente</label>


                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">[I03] Software como habilitador do aprendizado personalizado</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não sei</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question3" value="1" required> 
                    <label for="question3">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question3" value="2" required> 
                    <label for="question3">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question3" value="3" required> 
                    <label for="question3">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question3" value="4" required> 
                    <label for="1">4</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="4">Atende Plenamente</label>

                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">[I04] Software como habilitador da contribuição individual em um esforço coletivo para realização de uma tarefa</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não sei</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question4" value="1" required> 
                    <label for="question4">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question4" value="2" required> 
                    <label for="question4">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question4" value="3" required> 
                    <label for="question4">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question4" value="4" required> 
                    <label for="1">4</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="4">Atende Plenamente</label>

                  <hr>
                </li>
                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">[I05] Software como habilitador do aprendizado em pares</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não sei</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question5" value="1" required> 
                    <label for="question5">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question5" value="2" required> 
                    <label for="question5">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question5" value="3" required> 
                    <label for="question5">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question5" value="4" required> 
                    <label for="1">4</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="4">Atende Plenamente</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">[I06] Software como habilitador da comunicação entre indivíduos</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não sei</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question6" value="1" required> 
                    <label for="question6">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question6" value="2" required> 
                    <label for="question6">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question6" value="3" required> 
                    <label for="question6">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question6" value="4" required> 
                    <label for="1">4</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="4">Atende Plenamente</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">[I07] Software como habilitador da comunicação criativa do aprendizado</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não sei</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question7" value="1" required> 
                    <label for="question7">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question7" value="2" required> 
                    <label for="question7">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question7" value="3" required> 
                    <label for="question7">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question7" value="4" required> 
                    <label for="1">4</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="4">Atende Plenamente</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">[I08] Software como habilitador da resolução criativa de problemas</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não sei</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question8" value="1" required> 
                    <label for="question8">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question8" value="2" required> 
                    <label for="question8">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question8" value="3" required> 
                    <label for="question8">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question8" value="4" required> 
                    <label for="1">4</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="4">Atende Plenamente</label>
                  
                  <hr>
                </li>

                <li class="row form-group mx-0 margintop">
                  <h5 class="col-md-12 col-12 marginbottom">[I09] Software como habilitador da transformação do conhecimento</h5>
                  
                  <label class="col-md-3 col-3 mobile-fs75em" for="1">Não sei</label>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question9" value="1" required> 
                    <label for="question9">1</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question9" value="2" required> 
                    <label for="question9">2</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question9" value="3" required> 
                    <label for="question9">3</label>
                  </div>
                  <div class="radio col-md-1 col-1">
                    <input type="radio" name="question9" value="4" required> 
                    <label for="1">4</label>
                  </div>
                  <label class="col-md-4 col-4 mobile-fs75em" for="4">Atende Plenamente</label>
                  
                  <hr>
                </li>

              </ul>
              <div align="center"> 
                <div>
                <a href="{{ url('innovation/home') }}" class="btn btn-primary"> Voltar </a>
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
