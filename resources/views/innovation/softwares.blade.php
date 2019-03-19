
<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="shortcut icon" type="image/png" href="{{ url('/img/iconelogo.png')}}" >


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Softwares de suporte à Educação Avaliados</title>

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

    <header class="masthead" style="background-image: url({{ url('/img/innovation.jpg') }});">

      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Resultado das Avaliações por Software</h1>
              <span class="subheading">Aqui estão os Softwares de suporte à Educação avaliados pelos educadores.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->

    <div class="container">
        <a href="{{ url('innovation/result/Scratch')}}"><h3>Scratch</h3></a>
        <div class="row">
            <div class="col-md-10">
                <img style='float:left;width:250px;height:250px; margin-right:10px;' src="{{ url('/img/scratch.jpg')}}" />
                <p class="text-justify">Com o Scratch, pode programar as suas próprias estórias, jogos e animações interactivos – e partilhar as suas criações com outros na comunidade em linha. O Scratch ajuda os jovens a pensar de forma criativa, a raciocinar sistematicamente e a trabalhar colaborativamente — competências essenciais à vida no século XXI. O Scratch é um projecto do Lifelong Kindergarten Group do MIT Media Lab. É disponibilizado gratuitamente.</p>
            </div>
        </div>
        <div align="center">
            <a href="{{ url('innovation/result/Scratch')}}" class="btn btn-outline-secondary"> Ver resultado </a>

        </div>
    </div>
    <hr>
    <div class="container">
        <a href="{{ url('innovation/result/Moodle')}}"><h3>Moodle</h3></a>
        <div class="row">
            <div class="col-md-10">
                <img style='float:left;width:250px;height:250px; margin-right:10px;' src="{{ url('/img/moodle.jpg')}}" />
                <p class="text-justify">O Moodle é uma plataforma de aprendizado projetada para fornecer aos educadores, administradores e alunos um sistema robusto, seguro e integrado para criar ambientes de aprendizado personalizados.</p>
            </div>
        </div>
        <div align="center">
            <a href="{{ url('innovation/result/Moodle')}}" class="btn btn-outline-secondary"> Ver resultado </a>
        </div>
    </div>
    <hr>
    <div class="container">
        <a href="{{ url('innovation/result/Google Suite (Docs, Planilhas, etc.)')}}"><h3>Google Suite</h3></a>
        <div class="row">
            <div class="col-md-10">
                <img style='float:left;width:200px;height:200px; margin-right:10px;' src="{{ url('/img/gsuite.jpg')}}" />
                <p class="text-justify">Com o Google Suite for Education, os professores podem criar oportunidades de aprendizagem, simplificar as tarefas administrativas e desafiar os alunos a pensar de forma crítica, tudo isso sem interromper os fluxos de trabalho em andamento.</p>
            </div>
        </div>
        <div align="center">
            <a href="{{ url('innovation/result/Google Suite (Docs, Planilhas, etc.)')}}" class="btn btn-outline-secondary"> Ver resultado </a>
        </div>
    </div>
    <hr>
    <div class="container">
        <a href="{{ url('innovation/result/App Inventor')}}"><h3>App Inventor</h3></a>
        <div class="row">
            <div class="col-md-10">
                <img style='float:left;width:250px;height:250px; margin-right:10px;' src="{{ url('/img/appinventor.jpg')}}" />
                <p class="text-justify">O MIT App Inventor é um ambiente de programação visual e intuitivo que permite que todos - até mesmo crianças - criem aplicativos totalmente funcionais para smartphones e tablets. Ferramenta baseada em blocos facilita a criação de aplicativos complexos e de alto impacto em um tempo significativamente menor do que os ambientes de programação tradicionais.</p>
            </div>
        </div>
        <div align="center">
            <a href="{{ url('innovation/result/App Inventor')}}" class="btn btn-outline-secondary"> Ver resultado </a>
        </div>
    </div>
    <hr>
    <div class="container">
        <a href="{{ url('innovation/result/Google Classroom')}}"><h3>Google Classroom</h3></a>
        <div class="row">
            <div class="col-md-10">
                <img style='float:left;width:250px;height:250px; margin-right:10px;' src="{{ url('/img/gclassroom.jpg')}}" />
                <p class="text-justify">Google Classroom é uma ferramenta simplificada e fácil de usar que ajuda os professores a gerenciar os cursos. Com o Google Classroom, os educadores podem criar turmas, distribuir tarefas, avaliar e enviar feedback e ver tudo em um só lugar.</p>
            </div>
        </div>
        <div align="center">
            <a href="{{ url('innovation/result/Google Classroom')}}" class="btn btn-outline-secondary"> Ver resultado </a>
        </div>
    </div>
    <hr>
    <div class="container">
        <a href="{{ url('innovation/result/Lightbot')}}"><h3>Lightbot</h3></a>
        <div class="row">
            <div class="col-md-10">
                <img style='float:left;width:250px;height:250px; margin-right:10px;' src="{{ url('/img/lightbot.jpg')}}" />
                <p class="text-justify">LightBot é um jogo de quebra-cabeça baseado em codificação; secretamente ensina lógica de programação enquanto se joga. Tem sido jogado por mais de 20 milhões de crianças e tem sido usado por dezenas de milhares de professores em todo o mundo.</p>
            </div>
        </div>
        <div align="center">
            <a href="{{ url('innovation/result/Lighbot')}}" class="btn btn-outline-secondary"> Ver resultado </a>
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
