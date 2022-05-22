@extends('layouts.app')

@section('title', 'Página Inicial')

@section('styles')
<link rel="stylesheet" href="./css/paginaInicial.css">
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="mb-0 py-5">Bem Vindo a Plataforma, PetHappy</h1>
			</div>
		</div>
	</div>

	<!-- Slide-->
	<div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="true">
		<!-- Indicators -->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<!-- Slides -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="./img/pagina-inicial/Slide 1.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="..." class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="..." class="d-block w-100" alt="...">
			</div>
		</div>
		<!-- Controls -->
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!-- Conheça alguns dos nosso amiguinhos -->
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-12 colorCard">
				<div class="col-md-12 text-center">
					<h1 class="top_s">Conheça alguns dos nossos amiginhos!</h1>
				</div>
				<div class="card-group ">
					<div class="card border tamanhoCard rounded-9">
						<img class="card-img-top rounded-9" src="./img/cachorro.jpg" alt="Card image cap" style="height: 200px;border-radius: 30px 30px 0px 0px">
						<div class="card-body ">
							<h2 class="card-title">Nome: Jorge</h2>
							<h6 class=".card-subtitle">Ong: Cachorro feliz</h6>
							<h6 class=".card-subtitle">Estado: Ba</h6>
						</div>
					</div>

					<div class="card border tamanhoCard">
						<img class="card-img-top" src="./img/cachorro.jpg" alt="Card image cap " style="height: 200px">
						<div class="card-body">
							<h2 class="card-title">Nome: Jorge</h2>
							<h6 class="card-text">Ong: Cachorro feliz</h6>
							<h6 class="card-text">Estado: Ba</h6>
						</div>
					</div>

					<div class="card border tamanhoCard">
						<img class="card-img-top" src="./img/cachorro.jpg" alt="Card image cap" style="height: 200px">
						<div class="card-body">
							<h2 class="card-title">Nome: Jorge</h2>
							<h6 class="card-text">Ong: Cachorro feliz</h6>
							<h6 class="card-text">Estado: Ba</h6>
						</div>
					</div>

					<div class="card border tamanhoCard">
						<img class="card-img-top" src="./img/cachorro.jpg" alt="Card image cap" style="height: 200px">
						<div class="card-body">
							<h2 class="card-title">Nome: Jorge</h2>
							<h6 class="card-text">Ong: Cachorro feliz</h6>
							<h6 class="card-text">Estado: Ba</h6>
						</div>
					</div>

					<div class="card border tamanhoCard">
						<img class="card-img-top" src="./img/cachorro.jpg" alt="Card image cap" style="height: 200px">
						<div class="card-body">
							<h2 class="card-title">Nome: Jorge</h2>
							<h6 class="card-text">Ong: Cachorro feliz</h6>
							<h6 class="card-text">Estado: Ba</h6>
						</div>
					</div>
				</div>
				<div class="d-grid gap-2 col-2 mx-auto pt-5 mb-5">
					<button class="btn btn btn-primary" type="button">Visualizar mais animais</button>
				</div>
			</div>
		</div>
	</div>

	<!-- POR QUE ADOTAR? -->

	<div class="d-flex align-items-start flex-column pdCard">
		<div class="card mb-4" style="max-height: 140px;">
			<div class="row g-0">
				<div class="col-md-3">
					<img src="./img/cachorro.jpg" class="img-fluid rounded-start" alt="..." style="max-height: 140px; width:240px ;">
				</div>
				<div class="col-md-9">
					<div class="card-body">
						<h5 class="card-title text-center">Por que adotar?</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="d-flex align-items-end flex-column pdCard">
		<div class="card mb-4 " style="max-height: 140px;">
			<div class="row gx-0 ">

				<div class="col-md-auto ">
					<div class="card-body">
						<h5 class="card-title text-center">O que é necessário para adotar?</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
				</div>
				<div class="col-md-auto ">
					<img src="./img/cachorro.jpg" class="img-fluid " alt="..." style="max-height: 140px; width:240px ; ">
				</div>
			</div>
		</div>
	</div>

	<div class="d-flex align-items-start flex-column pdCard">
		<div class="card mb-4" style="max-height: 140px;">
			<div class="row g-0">
				<div class="col-md-3">
					<img src="./img/cachorro.jpg" class="img-fluid rounded-start" alt="..." style="max-height: 140px; width:240px ; ">
				</div>
				<div class="col-md-9">
					<div class="card-body">
						<h5 class="card-title text-center">Onde adotar?</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- AJUDE NOSSOS PARCEIROS --}}
	<div class="container ">
		<div class="row colorCard ">

			<div class="col-md-12 text-center ">
				<h1 class="top_s">Ajude também os nossos parceiros!</h1>
				<p class="m-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mattis nisl. Morbi sit amet placerat ipsum. Vivamus lobortis erat tincidunt mi porttitor, nec luctus nulla rhoncus. Morbi mattis felis risus, vitae aliquam urna sollicitudin consequat. Nullam viverra ante ac eros maximus porttitor. Curabitur ac tempus ipsum. Aenean vel ipsum egestas turpis sollicitudin blandit non ut augue. Nulla condimentum sollicitudin ornare. Mauris tincidunt neque id dui suscipit, in lacinia sapien consequat. Morbi cursus, neque in tincidunt imperdiet, mauris nibh dignissim metus, sit amet consequat turpis turpis non ante. Vivamus malesuada leo erat, dignissim egestas ipsum viverra eget. Vivamus at erat ut quam finibus dapibus vel vitae mi.</p>
			</div>
			<div class="col-md-12 text-center ">
				<h1 class="top_s">Formas de ajuda!</h1>
				<p class="m-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mattis nisl. Morbi sit amet placerat ipsum. Vivamus lobortis erat tincidunt mi porttitor, nec luctus nulla rhoncus. Morbi mattis felis risus, vitae aliquam urna sollicitudin consequat. Nullam viverra ante ac eros maximus porttitor. Curabitur ac tempus ipsum. Aenean vel ipsum egestas turpis sollicitudin blandit non ut augue. Nulla condimentum sollicitudin ornare. Mauris tincidunt neque id dui suscipit, in lacinia sapien consequat. Morbi cursus, neque in tincidunt imperdiet, mauris nibh dignissim metus, sit amet consequat turpis turpis non ante. Vivamus malesuada leo erat, dignissim egestas ipsum viverra eget. Vivamus at erat ut quam finibus dapibus vel vitae mi.</p>
			</div>

			<div class="col-md-4  ">
				<div class="card oe  " style="max-height: 170px; max-width:130px ; ">
					<a href="#"><img src="./img/cachorro.jpg" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Pix</h5>
					</div>
				</div>
			</div>

			<div class="col-md-4 ">
				<div class="card oe" style="max-height: 170px; max-width:130px ; ">
					<a href="#"><img src="./img/cachorro.jpg" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Transferência bancária</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="card oe" style="max-height: 170px;max-width:130px ; ">
					<a href="#"><img src="./img/cachorro.jpg" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Em espécie</h5>
					</div>
				</div>
			</div>

			<div class="col-md-12 text-center p-5">
				<h1 class="top_s">Outras forma de ajuda</h1>
			</div>

			<div class="col-md-3  ">
				<div class="card oe  " style="max-height: 170px; max-width:130px ; ">
					<a href="#"><img src="./img/cachorro.jpg" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Divulge-nos</h5>
					</div>
				</div>
			</div>

			<div class="col-md-2 ">
				<div class="card oe" style="max-height: 170px; max-width:130px ; ">
					<a href="#"><img src="./img/cachorro.jpg" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Doe brinquedos</h5>
					</div>
				</div>
			</div>

			<div class="col-md-2 ">
				<div class="card oe" style="max-height: 170px;max-width:130px ; ">
					<a href="#"><img src="./img/cachorro.jpg" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Doe alimentos</h5>
					</div>
				</div>
			</div>

			<div class="col-md-2 ">
				<div class="card oe" style="max-height: 170px;max-width:130px ; ">
					<a href="#"><img src="./img/cachorro.jpg" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Doe remédios</h5>
					</div>
				</div>
			</div>

			<div class="col-md-2 ">
				<div class="card oe" style="max-height: 170px;max-width:130px ; ">
					<a href="#"><img src="./img/cachorro.jpg" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Junte-se a nós</h5>
					</div>
				</div>
			</div>


		</div>
	</div>


	{{-- INSTITUICOES PARCEIRAS --}}
	<div class="container-fluid o ">
		<div class="row ">
			<div class="col-md-12 colorCard ">
				<div class="col-md-12 text-center ">
					<h1 class="top_s">Instituições Parceiras!</h1>
				</div>
				<div class="card-group   ta m-4">

					<div class="card border tamanhoCard d-flex align-itens-center justify-content-center text-center ">
						<img class="card-img-top " src="./img/cachorro.jpg" alt="Card image cap" style="height: 200px;border-radius: 30px 30px 0px 0px">
						<div class="card-body ">
							<h2 class="card-title">Nome</h2>
							<button type="button" class="btn btn-primary m-4">Detalhes</button>
						</div>
					</div>

					<div class="card border tamanhoCard d-flex align-itens-center justify-content-center text-center">
						<img class="card-img-top" src="./img/cachorro.jpg" alt="Card image cap " style="height: 200px">
						<div class="card-body">
							<h2 class="card-title">Nome</h2>
							<button type="button" class="btn btn-primary m-4">Detalhes</button>
						</div>
					</div>

					<div class="card border tamanhoCard d-flex align-itens-center justify-content-center text-center">
						<img class="card-img-top" src="./img/cachorro.jpg" alt="Card image cap" style="height: 200px">
						<div class="card-body">
							<h2 class="card-title">Nome</h2>
							<button type="button" class="btn btn-primary m-4">Detalhes</button>
						</div>
					</div>

					<div class="card border tamanhoCard d-flex align-itens-center justify-content-center text-center">
						<img class="card-img-top" src="./img/cachorro.jpg" alt="Card image cap" style="height: 200px">
						<div class="card-body">
							<h2 class="card-title">Nome</h2>
							<button type="button" class="btn btn-primary m-4 ">Detalhes</button>
						</div>
					</div>

					<div class="card border tamanhoCard d-flex align-itens-center justify-content-center text-center">
						<img class="card-img-top" src="./img/cachorro.jpg" alt="Card image cap" style="height: 200px">
						<div class="card-body">
							<h2 class="card-title">Nome</h2>
							<button type="button" class="btn btn-primary m-4">Detalhes</button>
						</div>
					</div>
				</div>
			</div>
			<div class="d-grid gap-2 col-3 mx-auto pt-5 mb-5">
				<button class="btn btn btn-primary" type="button">Visualizar mais Parceiros</button>
			</div>
		</div>
	</div>
@endsection