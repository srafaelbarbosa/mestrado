
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Formulário</title>

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

	<header class="masthead" style="background-image: url({{ url('/img/form.jpg') }});">

		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading">
						<h1>Formulário para os Educadores</h1>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Main Content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<h3 align="center">Cadastro de Avaliador</h3>
				<hr>
				<form>
					<div class="form-group">
						<label for="inputAddress">Nome</label>
						<input type="text" class="form-control" id="inputName" placeholder="Nome" required="">
					</div>

					<div class="form-group">
						<label for="inputAddress">Email</label>
						<input type="email" class="form-control" id="inputEmail" placeholder="Email" required="">
					</div>
					<hr>
					<div class="form-group">
						<label>Tempo de Experiência:</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="tempoExp" id="gridRadios1" value="option1" required="">
							<label class="form-check-label" for="gridRadios1">
								1 a 5
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="tempoExp" id="gridRadios2" value="option2" required="">
							<label class="form-check-label" for="gridRadios2">
								5 a 10
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="tempoExp" id="gridRadios3" value="option3">
							<label class="form-check-label" for="gridRadios3">
								Acima de 10
							</label>
						</div>
					</div>

					<div class="form-group">
						<label>Área de Atuação no Ensino:</label>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck1">
							<label class="form-check-label" for="gridCheck1">
								Ciências
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck2">
							<label class="form-check-label" for="gridCheck1">
								Tecnologia
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck2">
							<label class="form-check-label" for="gridCheck1">
								Educação
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck2">
							<label class="form-check-label" for="gridCheck1">
								Design
							</label>
						</div>
					</div>

					<div class="form-group">
						<label>Escolaridade (completa):</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question3" id="gridRadios1" value="option1" required="">
							<label class="form-check-label" for="gridRadios1">
								Graduação
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question3" id="gridRadios2" value="option2" required="">
							<label class="form-check-label" for="gridRadios2">
								Especialização
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question3" id="gridRadios3" value="option3" required="">
							<label class="form-check-label" for="gridRadios3">
								Mestrado
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question3" id="gridRadios3" value="option3" required="">
							<label class="form-check-label" for="gridRadios3">
								Doutorado
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question3" id="gridRadios3" value="option3" required="">
							<label class="form-check-label" for="gridRadios3">
								Técnico
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question3" id="gridRadios3" value="option3" required="">
							<label class="form-check-label" for="gridRadios3">
								Técnico
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question3" id="gridRadios3" value="option3" required="">
							<label class="form-check-label" for="gridRadios3">
								Graduação Incompleta
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question3" id="gridRadios3" value="option3" required="">
							<label class="form-check-label" for="gridRadios3">
								Ensino Médio
							</label>
						</div>

					</div>

					
					<hr>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputPassword4">Senha</label>
							<input type="password" class="form-control" id="inputPassword" placeholder="Password">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Confirme a senha</label>
							<input type="password" class="form-control" id="inputPassword" placeholder="Password">
						</div>
					</div>
					<hr>
					<div align="center">
						<a href="{{ url('quiz/home') }}" class="btn btn-primary"> Voltar </a>
						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</div>

				</form>

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
