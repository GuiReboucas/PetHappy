@extends('layouts.app')

@section('fonts')
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
@endsection

@section('title', 'Animail - Show')

@section('styles')
	<!-- Vendor CSS Files -->
	<link href="./show-assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="./show-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="./show-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="./show-assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="./show-assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="./show-assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<!-- Vendor CSS Files -->

	<!-- Template Main CSS File -->
	<link href="./show-assets/styles/detalhesAnimal.css" rel="stylesheet">
	<!-- Template Main CSS File -->
@endsection

@section('icons')
	<link href="./assets/images/icons/PetHappyMinimalIcon.svg" rel="icon">
	<link href="./assets/images/icons/PetHappyMinimalIcon.svg" rel="apple-touch-icon">
@endsection

@section('content')
	<!-- GERAL -->
	<div class="container-fluid h-100">
		<!-- LINHA 1 -->
		<div class="row h-100">
			<!-- COLUNA 1 -->
			<div class="col-lg h-100 d-flex align-items-center justify-content-center">
				<img id="logo" src="./show-assets/images/logos/PetHappyCompleteLogo.svg" alt="PetHappy Logo">
				<div id="galeria" class="container-fluid mx-auto">
					<div id="line-1"></div>
					<div id="line-2"></div>
					<div id="line-3"></div>
					<div id="line-4"></div>
					<div id="foto-principal" class="row mx-auto">
						<img src="./show-assets/images/animals/dog4.jpg" alt="" data-tilt data-tilt-max="5" data-tilt-scale="1.035">
					</div>
					<div id="fotos" class="row mx-auto">
						<div id="foto-1" class="col">
							<img src="./show-assets/images/animals/dog1.jpg" alt="" data-tilt data-tilt-axis="x" data-tilt-max="10">
						</div>

						<div id="foto-2" class="col">
							<img src="./show-assets/images/animals/dog2.jpg" alt="" data-tilt data-tilt-axis="x" data-tilt-max="10">
						</div>

						<div id="foto-3" class="col">
							<img src="./show-assets/images/animals/dog3.jpg" alt="" data-tilt data-tilt-axis="x" data-tilt-max="10">
						</div>
					</div>
				</div>
			</div>
			<!-- COLUNA 1 -->

			<!-- COLUNA 2 -->
			<div class="col-lg h-100 d-flex align-items-center justify-content-center">
				<div id="card" class="container-fluid mx-auto" data-tilt data-tilt-max="5" data-tilt-scale="1.035" data-tilt-glare data-tilt-max-glare="0.25">
					<div class="row w-100 text-center mx-auto">
						<h2 id="nome">NOME DO ANIMAL</h2>
					</div>
					<div id="dados" class="row w-100 mx-auto">
						<h3>Idade:</h3>
						<p>X anos</p>
						<h3>Sexo:</h3>
						<p>Macho/Fêmea</p>
						<h3>Raça:</h3>
						<p>XXXXX</p>
						<h3>Alocação:</h3>
						<p>XXXXX</p>
						<h3>Registro:</h3>
						<p>XXXX-XXXX-XXXX</p>
						<h3>História:</h3>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, ullam saepe illum veritatis laudantium enim, hic consectetur eos, reiciendis accusamus temporibus! Aspernatur numquam enim, rem deleniti corporis perferendis odio dolores.</p>
						<h3>Quadro Clínico:</h3>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi eaque sequi nobis in consequatur quia dolorum sunt obcaecati nulla. Ipsa libero quis nesciunt suscipit necessitatibus provident sit, assumenda voluptatibus itaque!</p>
					</div>

					<div class="row w-100 mx-auto text-center">
						<a id="adotar" class="text-center mx-auto" href="#">
							<span id="texto-adotar" class="text-center">ADOTAR</span>
						</a>
					</div>
				</div>
			</div>
			<!-- COLUNA 2 -->
		</div>
		<!-- LINHA 1 -->
	</div>
@endsection

@section('scripts')
	<!-- Vendor JS Files -->
	<script src="./show-assets/vendor/purecounter/purecounter.js"></script>
	<script src="./show-assets/vendor/aos/aos.js"></script>
	<script src="./show-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="./show-assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="./show-assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="./show-assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="./show-assets/vendor/php-email-form/validate.js"></script>
	<script src="./show-assets/vendor/vanilla-tilt/vanilla-tilt.js"></script>
	<!-- Template Main JS File -->
	<script src="assets/scripts/detalhesAnimal.js"></script>
@endsection