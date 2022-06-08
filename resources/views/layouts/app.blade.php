<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>
	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<!--Bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!--CSS-->
	<link rel="stylesheet" href="./css/app.css">
	@yield('styles')
	<!-- Icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
	<!-- Menu-->
	<header>
		<div class="container">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg bg-light fixed-top">
				<div class="container-fluid position-relative">
					<!-- Logomarca -->
					<a href="#" class="navbar-brand">
						<img id="logo" src="./img/app-view/Pet Happy Logo 1.svg" alt="Logo PetHappy" width="75" class="d-inline-block align-text">
						PetHappy
					</a>
					<!-- Botão Responsivo -->
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<!-- Nav Links -->
					<div class="collapse navbar-collapse" id="navbar-links">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="{{ route('pagina-inicial.view') }}" class="nav-link active" aria-current="page" id="home-menu">Pagina Inicial</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('sobre.view') }}" class="nav-link" id="on-menu">Sobre</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link" id="institutions-menu">Instituições</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link" id="help-menu">Ajudar</a>
							</li>
							<li>
								<a href="{{ route('usuario.show') }}" class="nav-link">Usuário - Show</a>
							</li>
							<li>
								<a href="{{ route('relatorio') }}" class="nav-link">Relatório</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<!-- Repetidor da main nas outras paginas(section)-->
	<!-- Pedir pra Daniel me explicar q zorra é essa 👇 -->
	<main>
		@if(session('msg'))
			<p class="msg">{{ session('msg') }}</p>
		@endif
		@yield('content')
	</main>

	<!-- Rodapé -->
	<footer class="bg-light text-black pt-5 pb-4">
		<div class="container">
			<div class="row text-center text-md-start">
				<!-- PetHappy -->
				<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
					<h5 class="text-uppercase fw-bold mb-4 font-weight-bold">PetHappy</h5>
					<p>*Descrição da Empresa*</p>
				</div>

				<!--Colabore-->
				<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
					<h5 class="text-uppercase fw-bold mb-4 font-weight-bold">Colabore</h5>
					<ul class="list-unstyled mb-0 ">
						<li><a href="#!" class="text-dark text-decoration-none">Doe Qualquer valor</a></li>
						<li><a href="#!" class="text-dark text-decoration-none">Divulgue a PatHappy</a></li>
						<li><a href="#!" class="text-dark text-decoration-none">Seja nosso Parceiro!</a></li>
					</ul>
				</div>

				<!-- Suporte -->
				<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
					<h5 class="text-uppercase fw-bold mb-4 font-weight-bold">Suporte</h5>
					<ul class="list-unstyled fd">
						<li><a href="#!" class="text-dark text-decoration-none">Perguntas Frequentes (FAQ)</a></li>
						<li><a href="#!" class="text-dark text-decoration-none">Mapa do site</a></li>
						<li><a href="#!" class="text-dark text-decoration-none">Reportar erro</a></li>
					</ul>
				</div>

				<!-- Contato -->
				<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
					<h5 class="text-uppercase fw-bold mb-4 font-weight-bold">Entre em contato</h5>
					<ul class="list-unstyled">
						<li>
							<p><i class="fa-solid fa-house-chimney me-3"></i>Feira de Santana, BA</p>
						</li>
						<li>
							<p><i class="fa-solid fa-phone me-3"></i>(75) 9 9999-9999</p>
						</li>
						<li>
							<p><i class="fa-solid fa-envelope me-3"></i>pethappy@gmail.com</p>
						</li>
					</ul>
				</div>

				<!--Site Blindado-->
				<!-- <div class="col-md-2 mb-4 mb-md-0">
					<img class="selo" src=".\img\siteBlindado.png" style="height: 35px">
					<img class="selo" src=".\img\selo_ebit.png" style="height: 35px">
				</div>
				<div class="col-md-2 mb-4 mb-md-0">
					<img class="selo" src=".\img\selo-ra.png" style="height: 35px">
					<img class="selo" src=".\img\selo-google-site-seguro.png" style="height: 35px">
				</div> -->
			</div>
			<hr class="mb-4">
			<div class="row align-items-center">
				<!-- Copyright -->
				<div class="col-md-7 col-lg-8 text-sm-center text-md-start">
					<p> Copyright © 2022 Todos direitos reservados por:
						<a href="#" class="text-decoration-none text-black">
							<strong class="">Pet Happy</strong>
						</a>
					</p>
				</div>
				<!-- Redes Sociais -->
				<div class="col-md-5 col-lg-4">
					<div class="text-center text-md-end">
						<ul class="list-unstyled list-inline">
							<li class="list-inline-item">
								<a href="https://pt-br.facebook.com/" class="text-black fs-4" target="_blank" rel="noopener noreferrer">
									<i class="fab fa-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="https://www.instagram.com/" class="text-black fs-4" target="_blank" rel="noopener noreferrer">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="https://www.whatsapp.com/" class="text-black fs-4" target="_blank" rel="noopener noreferrer">
									<i class="fab fa-whatsapp"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="https://twitter.com/" class="text-black fs-4" target="_blank" rel="noopener noreferrer">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="./js/app.js"></script>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<!--Progress Bar-->
	<script src="./js/progressbar.min.js"></script>
	<!--Paralax-->
	<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
	<!-- Icons -->
	<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
	<!-- Page Scripts -->
	@yield('scripts')
</body>

</html>