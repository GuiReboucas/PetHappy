@extends('layouts.app')

@section('title', 'Página Inicial')

@section('styles')
	<link rel="stylesheet" href="./css/paginaInicial.css">
@endsection

@section('content')
	<div class="container-fluid text-center d-flex flex-column align-items-center mb-5" style="background-color: #C4C4C4;">
		<h1 class="my-3">Bem Vindo ao PetHappy!</h1>
		<p class="text-wrap mb-0" style="width: 60%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		Praesent at urna vitae sapien mollis aliquam. Vestibulum ante
		ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus nec odio quis quam rhoncus
		auctor. Nullam tempus nibh in mi placerat, eget molestie odio laoreet. Nulla metus augue, auctor
		at libero quis, sagittis blandit lectus. Curabitur commodo dui lacus, nec laoreet orci semper non.
		Suspendisse laoreet volutpat tincidunt. Aenean posuere pretium nisl.</p>
		<button type="button" class="btn btn-outline-dark rounded-pill px-4 my-4">Torne-se Nosso Parceiro</button>
	</div>

	<!-- Introdução -->
	<!-- <div class="container justify-content-start my-5">
		<h3>Boas Vindas</h3>
		<p class="text-wrap" style="font-size: 13px; width: 65%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed nibh ante. 
			Vestibulum at lorem vel augue tristique consectetur. Pellentesque sed convallis neque. 
			Suspendisse posuere sollicitudin leo, rutrum elementum ipsum posuere nec. 
			Maecenas dictum mattis odio eu volutpat. Phasellus dictum accumsan molestie. Etiam convallis luctus eleifend. 
			Sed iaculis mi quam, eu tincidunt quam elementum vel.</p>
	</div> -->

	<!-- Conheça alguns dos nosso amiguinhos -->
	<div class="container-fluid rounded my-3 position-relative" style="width: 95%; background-color: rgb(255, 228, 196);">
		<!-- Titulo -->
		<div class="text-center">
			<h1 class="py-3">Conheça alguns dos nossos amiginhos!</h1>
		</div>
		<!-- Cards -->
		<div class="row row-cols-sm-2 row-cols-md-5 gy-2 ms-2">
			<!-- Loop para inserir os animais -->
			<div class="col">
				<div class="card border cardAnimais">
					<img class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;" src="./img/pagina-inicial/cachorro.jpg" alt="Imagem do Animal">
					<div class="card-body">
						<h5 class="card-title">Nome: Jorge</h5>
						<p class="card-text mb-0">ONG: Cachorro feliz</p>
						<p class="card-text">Estado: Ba</p>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card border cardAnimais">
					<img class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;" src="./img/pagina-inicial/cachorro.jpg" alt="Imagem do Animal">
					<div class="card-body">
						<h5 class="card-title">Nome: Jorge</h5>
						<p class="card-text mb-0">ONG: Cachorro feliz</p>
						<p class="card-text">Estado: Ba</p>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card border cardAnimais">
					<img class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;" src="./img/pagina-inicial/cachorro.jpg" alt="Imagem do Animal">
					<div class="card-body">
						<h5 class="card-title">Nome: Jorge</h5>
						<p class="card-text mb-0">ONG: Cachorro feliz</p>
						<p class="card-text">Estado: Ba</p>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card border cardAnimais">
					<img class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;" src="./img/pagina-inicial/cachorro.jpg" alt="Imagem do Animal">
					<div class="card-body">
						<h5 class="card-title">Nome: Jorge</h5>
						<p class="card-text mb-0">ONG: Cachorro feliz</p>
						<p class="card-text">Estado: Ba</p>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card border cardAnimais">
					<img class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;" src="./img/pagina-inicial/cachorro.jpg" alt="Imagem do Animal">
					<div class="card-body">
						<h5 class="card-title">Nome: Jorge</h5>
						<p class="card-text mb-0">ONG: Cachorro feliz</p>
						<p class="card-text">Estado: Ba</p>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card border cardAnimais">
					<img class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;" src="./img/pagina-inicial/cachorro.jpg" alt="Imagem do Animal">
					<div class="card-body">
						<h5 class="card-title">Nome: Jorge</h5>
						<p class="card-text mb-0">ONG: Cachorro feliz</p>
						<p class="card-text">Estado: Ba</p>
					</div>
				</div>
			</div>
			<!-- Fim do Loop -->
		</div>
		<!-- Botão de Visualizar + -->
		<div class="d-flex justify-content-center">
			<button class="btn btn-outline-dark rounded-pill my-4" type="button">Visualizar mais animais</button>
		</div>
	</div>

	<!-- POR QUE ADOTAR? -->
	<div class="d-flex align-items-start flex-column px-5">
		<div class="card mb-4" style="max-height: 140px;">
			<div class="row g-0">
				<div class="col-md-3">
					<img src="./img/pagina-inicial/cachorro.jpg" class="img-fluid rounded-start" alt="..." style="max-height: 140px; width:240px ;">
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

	<div class="d-flex align-items-end flex-column px-5">
		<div class="card mb-4 " style="max-height: 140px;">
			<div class="row gx-0 ">
				<div class="col-md-auto ">
					<div class="card-body">
						<h5 class="card-title text-center">O que é necessário para adotar?</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
				</div>
				<div class="col-md-auto ">
					<img src="./img/pagina-inicial/cachorro.jpg" class="img-fluid " alt="..." style="max-height: 140px; width:240px ; ">
				</div>
			</div>
		</div>
	</div>

	<div class="d-flex align-items-start flex-column px-5">
		<div class="card mb-4" style="max-height: 140px;">
			<div class="row g-0">
				<div class="col-md-3">
					<img src="./img/pagina-inicial/cachorro.jpg" class="img-fluid rounded-start" alt="..." style="max-height: 140px; width:240px ; ">
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

	<!-- AJUDE NOSSOS PARCEIROS -->
	<div class="container">
		<div class="row pt-4 rounded-5" style="background-color: rgb(255, 228, 196);">
			<div class="col-md-12 text-center">
				<h1>Ajude também os nossos parceiros!</h1>
				<p class="m-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mattis nisl. Morbi sit amet placerat ipsum. Vivamus lobortis erat tincidunt mi porttitor, nec luctus nulla rhoncus. Morbi mattis felis risus, vitae aliquam urna sollicitudin consequat. Nullam viverra ante ac eros maximus porttitor. Curabitur ac tempus ipsum. Aenean vel ipsum egestas turpis sollicitudin blandit non ut augue. Nulla condimentum sollicitudin ornare. Mauris tincidunt neque id dui suscipit, in lacinia sapien consequat. Morbi cursus, neque in tincidunt imperdiet, mauris nibh dignissim metus, sit amet consequat turpis turpis non ante. Vivamus malesuada leo erat, dignissim egestas ipsum viverra eget. Vivamus at erat ut quam finibus dapibus vel vitae mi.</p>
			</div>

			<div class="col-md-12 text-center">
				<h1>Formas de ajuda!</h1>
				<p class="m-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mattis nisl. Morbi sit amet placerat ipsum. Vivamus lobortis erat tincidunt mi porttitor, nec luctus nulla rhoncus. Morbi mattis felis risus, vitae aliquam urna sollicitudin consequat. Nullam viverra ante ac eros maximus porttitor. Curabitur ac tempus ipsum. Aenean vel ipsum egestas turpis sollicitudin blandit non ut augue. Nulla condimentum sollicitudin ornare. Mauris tincidunt neque id dui suscipit, in lacinia sapien consequat. Morbi cursus, neque in tincidunt imperdiet, mauris nibh dignissim metus, sit amet consequat turpis turpis non ante. Vivamus malesuada leo erat, dignissim egestas ipsum viverra eget. Vivamus at erat ut quam finibus dapibus vel vitae mi.</p>
			</div>
			
			<div class="col-md-4 position-relative">
				<a class="position-absolute top-50 start-50 translate-middle" href="#">
					<img class="" style="max-width: 150px;" src="./img/pagina-inicial/PixIcone.png" alt="Pix Icone">
				</a>
			</div>

			<div class="col-md-4 position-relative">
				<a class="position-absolute top-50 start-50 translate-middle text-center text-decoration-none" href="#">
					<img class="" style="max-width: 80px;" src="./img/pagina-inicial/TransBanc.png" alt="Transferência Bancária Icone">
					<p class="" style="color: black;">Transferência bancária</p>
				</a>
			</div>

			<div class="col-md-4 position-relative">
				<div class="card invisible" style="max-height: 170px;max-width:130px ; ">
					<a href="#"><img src="./img/pagina-inicial/cachorro.jpg" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Em espécie</h5>
					</div>
				</div>

				<a class="position-absolute top-50 start-50 translate-middle text-center text-decoration-none" href="#">
					<img style="max-width: 100px;" src="./img/pagina-inicial/dinheiro.png" alt="Dinheiro Icone">
					<p style="color: black;">Em espécie</p>
				</a>
			</div>

			<div class="col-md-12 text-center p-5">
				<h1 class="">Outras forma de ajuda</h1>
			</div>

			<div class="col position-relative">
				<a class="position-absolute top-50 start-50 translate-middle text-decoration-none text-center" style="color: black;" href="#">
					<i class="fa-solid fa-bullhorn fs-1"></i>
					<p class="text-decoration-none">Divulge-nos</p>
				</a>
			</div>

			<div class="col position-relative">
				<a class="position-absolute top-50 start-50 translate-middle text-decoration-none text-center" style="color: black;" href="#">
					<i class="fa-solid fa-car-side fs-1"></i>
					<p class="text-decoration-none">Doe brinquedos</p>
				</a>
			</div>

			<div class="col position-relative">
				<a class="position-absolute top-50 start-50 translate-middle text-decoration-none text-center" style="color: black;" href="#">
					<i class="fa-solid fa-bone fs-1"></i>
					<p class="text-decoration-none">Doe alimentos</p>
				</a>
			</div>

			<div class="col position-relative">
				<a class="position-absolute top-50 start-50 translate-middle text-decoration-none text-center" style="color: black;" href="#">
					<i class="fa-solid fa-hand-holding-medical fs-1"></i>
					<p class="text-decoration-none">Doe remédios</p>
				</a>
			</div>

			<div class="col position-relative">
				<div class="card invisible" style="max-height: 170px;max-width:130px ; ">
					<a href="#"><img src="./img/pagina-inicial/cachorro.jpg" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Junte-se a nós</h5>
					</div>
				</div>

				<a class="position-absolute top-50 start-50 translate-middle text-decoration-none text-center" style="color: black;" href="#">
					<i class="fa-solid fa-users fs-1"></i>
					<p class="text-decoration-none">Junte-se a nós</p>
				</a>
			</div>
		</div>
	</div>

	<!-- Instituições Parceiras -->
	<div class="container-fluid my-4">
		<div class="row">
			<div class="col-md-12 pt-4 rounded-5" style="background-color: rgb(255, 228, 196);">
				<div class="text-center">
					<h1>Instituições Parceiras!</h1>
				</div>

				<div class="card-group m-4">
					<div class="card border d-flex align-itens-center justify-content-center text-center ">
						<img class="card-img-top" src="./img/pagina-inicial/cachorro.jpg" alt="Card image cap" style="height: 200px;border-radius: 30px 30px 0px 0px">
						<div class="card-body ">
							<h2 class="card-title">Nome</h2>
							<button type="button" class="btn btn-primary m-4">Detalhes</button>
						</div>
					</div>

					<div class="card border d-flex align-itens-center justify-content-center text-center">
						<img class="card-img-top" src="./img/pagina-inicial/cachorro.jpg" alt="Card image cap " style="height: 200px">
						<div class="card-body">
							<h2 class="card-title">Nome</h2>
							<button type="button" class="btn btn-primary m-4">Detalhes</button>
						</div>
					</div>

					<div class="card border d-flex align-itens-center justify-content-center text-center">
						<img class="card-img-top" src="./img/pagina-inicial/cachorro.jpg" alt="Card image cap" style="height: 200px">
						<div class="card-body">
							<h2 class="card-title">Nome</h2>
							<button type="button" class="btn btn-primary m-4">Detalhes</button>
						</div>
					</div>

					<div class="card border d-flex align-itens-center justify-content-center text-center">
						<img class="card-img-top" src="./img/pagina-inicial/cachorro.jpg" alt="Card image cap" style="height: 200px">
						<div class="card-body">
							<h2 class="card-title">Nome</h2>
							<button type="button" class="btn btn-primary m-4 ">Detalhes</button>
						</div>
					</div>

					<div class="card border d-flex align-itens-center justify-content-center text-center">
						<img class="card-img-top" src="./img/pagina-inicial/cachorro.jpg" alt="Card image cap" style="height: 200px">
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