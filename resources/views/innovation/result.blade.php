<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="shortcut icon" type="image/png" href="{{ url('/img/iconelogo.png')}}" >

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resultado da Avaliação</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/css/bootstrap.min.css') }}"  rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ url('/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/dataviz.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
    <!-- Custom styles for this template -->
    <link href="{{ url('css/clean-blog.min.css') }}" rel="stylesheet">

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
                    <h4> <span class="label label-default">Resultado da avaliação do Software: {{ $nomeSoftware }}</span></h4>
                    <div id="chartdiv"></div>
                </div>
            </div>
            <hr>

            <div class="container">
                <div class="align-self-center">
                    <h3 align="center">Média das Avaliações dos Indicadores de Inovação:</h3>
                    <p>A avaliação dos Indicadores de Inovação como habilitadores é entre 1 e 4.</p>
                </div>
                
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    [I01] Aprendizado autônomo e autodirigido: 
                    <span class="badge badge-primary badge-pill">{{  mediaQuestao($nomeSoftware, 1) }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    [I02] Adaptação a diferentes modos e paradigmas de aprendizagem:
                    <span class="badge badge-primary badge-pill">{{  mediaQuestao($nomeSoftware, 2) }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    [I03] Aprendizado personalizado:
                    <span class="badge badge-primary badge-pill">{{  mediaQuestao($nomeSoftware, 3) }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    [I04] Contribuição individual em um esforço coletivo para realização de uma tarefa:
                    <span class="badge badge-primary badge-pill">{{  mediaQuestao($nomeSoftware, 4) }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    [I05] Aprendizado em pares:
                    <span class="badge badge-primary badge-pill">{{  mediaQuestao($nomeSoftware, 5) }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    [I06] Comunicação entre indivíduos:
                    <span class="badge badge-primary badge-pill">{{  mediaQuestao($nomeSoftware, 6) }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    [I07] Comunicação criativa do aprendizado:
                    <span class="badge badge-primary badge-pill">{{  mediaQuestao($nomeSoftware, 7) }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    [I08] Resolução criativa de problemas:
                    <span class="badge badge-primary badge-pill">{{  mediaQuestao($nomeSoftware, 8) }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    [I09] Transformação do conhecimento:
                    <span class="badge badge-primary badge-pill">{{  mediaQuestao($nomeSoftware, 9) }}</span>
                  </li>
                </ul>
            </div>

            <br>
           
            <div align="center">
                <a href="{{ url('innovation/softwares') }}" class="btn btn-primary"> Voltar </a>
            </div> 
            <hr>
        </div>
    <article>

    <style>
        #chartdiv {
        width: 100%;
        height: 500px;
        }
    </style>

    <script>

        var total  =  {!! json_encode($total) !!};
        // Themes begin
        am4core.useTheme(am4themes_dataviz);
        am4core.useTheme(am4themes_animated);
        // Themes end

        // create chart
        var chart = am4core.create("chartdiv", am4charts.GaugeChart);
        chart.hiddenState.properties.opacity = 0; // this makes initial fade in effect

        chart.innerRadius = -25;

        var axis = chart.xAxes.push(new am4charts.ValueAxis());
        axis.min = 0;
        axis.max = 100;
        axis.strictMinMax = true;
        axis.renderer.grid.template.stroke = new am4core.InterfaceColorSet().getFor("background");
        axis.renderer.grid.template.strokeOpacity = 0.3;

        var colorSet = new am4core.ColorSet();

        var range0 = axis.axisRanges.create();
        range0.value = 0;
        range0.endValue = 40;
        range0.axisFill.fillOpacity = 1;
        range0.axisFill.fill = colorSet.getIndex(4);
        range0.axisFill.zIndex = - 1;

        var range1 = axis.axisRanges.create();
        range1.value = 40;
        range1.endValue = 70;
        range1.axisFill.fillOpacity = 1;
        range1.axisFill.fill = colorSet.getIndex(2);
        range1.axisFill.zIndex = -1;

        var range2 = axis.axisRanges.create();
        range2.value = 70;
        range2.endValue = 100;
        range2.axisFill.fillOpacity = 1;
        range2.axisFill.fill = colorSet.getIndex(0);
        range2.axisFill.zIndex = -1;




        var hand = chart.hands.push(new am4charts.ClockHand());

        // using chart.setTimeout method as the timeout will be disposed together with a chart
        chart.setTimeout(randomValue, 2000);

        function randomValue() {
            hand.showValue(total * 100, 1000, am4core.ease.cubicOut);
            chart.setTimeout(randomValue, 2000);
        }
    </script>
    <script type="text/javascript" src="{{ url('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/clean-blog.min.js') }}"></script>

    <!-- Resources -->


  </body>

</html>
