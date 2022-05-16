<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<!--Bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!--CSS-->
	<link rel="stylesheet" href="./css/main.css">
	<!-- Javascript -->
	<script type="text/javascript" src="./js/main.js"></script>
	<!--Scripts jquery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<!-- Icons-->
	<script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
	<!--Progress Bar-->
	<script src="./js/progressbar.min.js"></script>
	<!--Paralax-->
	<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>

<body>
	<!-- Menu-->
	<header>
		<div class="container " id="nav-container">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
				<div class="container-fluid position-relative">
					<!-- Logomarca -->
					<a href="#" class="navbar-brand">
						<img id="logo" src="../img/Pet Happy Logo 1.svg" alt="Logo PetHappy" width="75" class="d-inline-block align-text">
						PetHappy
					</a>
					<!-- Botão Responsivo -->
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-links" 
						aria-controls="navbar-links" 
						aria-expanded="false" 
						aria-label="toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>
					<!-- Nav Links -->
					<div class="collapse navbar-collapse" id="navbar-links">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="#" class="nav-link active" aria-current="page" id="home-menu">Pagina Inicial</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link" id="on-menu">Sobre</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link" id="institutions-menu">Instituições</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link" id="help-menu">Ajudar</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
	</header>

	<!-- Repetidor da main nas outras paginas(section)-->
	<main>
		<div class="container-fluid">
			<div class="row">
				@if(session('msg'))
				<p class="msg">{{ session('msg') }}</p>
				@endif
				@yield('content')
			</div>
		</div>
	</main>

	<!-- Rodapé-->
	<footer class="bg-light text-center text-lg-start">
		<div class="container-fluid">
			<div class="row">
				<!--Pet Happy-->
				<div class="col-lg-2 mb-4 mb-md-0">
					<h5 class="text-uppercase rt">Entre em contato</h5>
					<ul class="list-unstyled mb-0 iconesFooterPetHappy">
						<li>
							<p><img src="./img/chamada-telefonica.png" style="height: auto">(75) 9 9999-9999</p>
						</li>
						<li>
							<p><img src="./img/o-email.png" style="height: auto">pethappy@gmail.com</p>
						</li>
					</ul>
				</div>

				<!--Redes Socias-->
				<div class="col-lg-2  mb-4 mb-md-0">
					<h5 class="text-uppercase mb-0 rt">Redes Socias</h5>
					<div class="iconesFooter">
						<a href="https://pt-br.facebook.com/"><img src="./img/facebook.png" style="height: 35px"></a>
						<a href="https://www.instagram.com/"><img src="./img/instagram.png" style="height: 35px"></a>
						<a href="https://www.whatsapp.com/"><img src="./img/whatsapp.png" style="height: 35px" /></a>
						<a href="https://twitter.com/"><img src="./img/twitter.png" style="height: 35px"></a>
					</div>
				</div>

				<!--Colabore-->
				<div class="col-lg-2  mb-4 mb-md-0">
					<h5 class="text-uppercase rt">Colabore</h5>
					<ul class="list-unstyled mb-0 fd">
						<li><a href="#!" class="text-dark">Doe Qualquer valor </a></li>
						<li><a href="#!" class="text-dark">Divulgue a PatHappy </a></li>
					</ul>
				</div>

				<!--Suporte -->
				<div class="col-lg-2  mb-4 mb-md-0">
					<h5 class="text-uppercase mb-0 rt">Suporte</h5>
					<ul class="list-unstyled fd">
						<li><a href="#!" class="text-dark">Perguntas Frequentes</a></li>
						<li><a href="#!" class="text-dark">Mapa do site</a></li>
						<li><a href="#!" class="text-dark">Reportar erro</a></li>
					</ul>
				</div>

				<!--Site Blindado-->
				<div class="col-lg-2  mb-4 mb-md-0">
					<img class="selo" src=".\img\siteBlindado.png" style="height: 35px">
					<img class="selo" src=".\img\selo_ebit.png" style="height: 35px">
				</div>
				<div class="col-lg-2  mb-4 mb-md-0">
					<img class="selo" src=".\img\selo-ra.png" style="height: 35px">
					<img class="selo" src=".\img\selo-google-site-seguro.png" style="height: 35px">
				</div>

				<!-- Copyright -->
				<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
					Copyright © 2022 Pet Happy. Todos direitos reservados.
				</div>
			</div>
		</div>
	</footer>


	<script src=".js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>