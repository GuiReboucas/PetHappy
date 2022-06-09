@extends('layouts.app')

@section('title', 'Página Inicial')

@section('styles')
<link rel="stylesheet" href="./css/paginaInicial.css">
@endsection

@section('content')
	<div class="container-fluid text-center d-flex flex-column align-items-center mb-5" style="height: 290px; background-color: #C4C4C4;">
		<h1 class="my-3">Bem Vindo ao PetHappy!</h1>
		<p class="text-wrap" style="width: 60%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		Praesent at urna vitae sapien mollis aliquam. Vestibulum ante
		ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus nec odio quis quam rhoncus
		auctor. Nullam tempus nibh in mi placerat, eget molestie odio laoreet. Nulla metus augue, auctor
		at libero quis, sagittis blandit lectus. Curabitur commodo dui lacus, nec laoreet orci semper non.
		Suspendisse laoreet volutpat tincidunt. Aenean posuere pretium nisl.</p>
		<button type="button" class="btn btn-outline-dark rounded-pill px-4 mt-2">Torne-se Nosso Parceiro</button>
	</div>
	<!-- Conheça alguns dos nosso amiguinhos -->

	<div class="container-fluid o ">
		<div class="row ">
			<div class="col-md-12 colorCard ">
				<div class="col-md-12 text-center ">
					<h1 class="top_s">Conheça alguns dos nossos amiginhos!</h1>
				</div>
				<div class="card-group   ta m-4">

				@foreach($animais as $animal)
				<div class="card border tamanhoCard d-flex align-itens-center justify-content-center text-center ">
					<div class="card-body ">
					
					
						<th><img src="/img/events/{{ $animal->image }}" class="img-fluid" alt="{{ $animal->image }}" style="height: 150px "></th>
						<h4 scope="row">{{$animal->nome}}</h4>
						<h6>{{ $animal->especie }}</h6>
						<h6>{{ $animal->raca }}</h6>
						<button type="button" class="btn btn-primary m-4">Conhecer</button>		   
					</div>
				</div>
				@endforeach
				</div>
			</div>
		</div>
	</div>

	<!-- POR QUE ADOTAR? -->

	<div class="d-flex align-items-start flex-column pdCard">
		<div class="card mb-4" style="max-height: 140px;">
			<div class="row g-0">
				<div class="col-md-3">
					<img src=".\img\pagina-inicial\pqAdotarGato.jpg" class="img-fluid rounded-start" alt="..." style="max-height: 140px; width:240px ;">
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
					<img src="./img\pagina-inicial\pqAdotarDog.jpg" class="img-fluid " alt="..." style="max-height: 140px; width:240px ; ">
				</div>
			</div>
		</div>
	</div>

	<div class="d-flex align-items-start flex-column pdCard">
		<div class="card mb-4" style="max-height: 140px;">
			<div class="row g-0">
				<div class="col-md-3">
					<img src=".\img\pagina-inicial\pqAdotarAbrigo.jpg" class="img-fluid rounded-start" alt="..." style="max-height: 140px; width:240px ; ">
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
					<a href="#"><img src=".\img\pagina-inicial\pix.png" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Pix</h5>
					</div>
				</div>
			</div>

			<div class="col-md-4 ">
				<div class="card oe" style="max-height: 170px; max-width:130px ; ">
					<a href="#"><img src=".\img\pagina-inicial\tranferBankColor.png" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Transferência bancária</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="card oe" style="max-height: 170px;max-width:130px ; ">
					<a href="#"><img src=".\img\pagina-inicial\dinheiroEspecieColor.png" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
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
					<a href="#"><img src=".\img\pagina-inicial\compartilhar.png" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Divulge-nos</h5>
					</div>
				</div>
			</div>

			<div class="col-md-2 ">
				<div class="card oe" style="max-height: 170px; max-width:130px ; ">
					<a href="#"><img src=".\img\pagina-inicial\brinquedosDogs.png" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Doe brinquedos</h5>
					</div>
				</div>
			</div>

			<div class="col-md-2 ">
				<div class="card oe" style="max-height: 170px;max-width:130px ; ">
					<a href="#"><img src=".\img\pagina-inicial\comidaDogs.png" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Doe alimentos</h5>
					</div>
				</div>
			</div>

			<div class="col-md-2 ">
				<div class="card oe" style="max-height: 170px;max-width:130px ; ">
					<a href="#"><img src=".\img\pagina-inicial\remedioDogs.png" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
					<div class="card-body">
						<h5 class="card-text text-center">Doe remédios</h5>
					</div>
				</div>
			</div>

			<div class="col-md-2 ">
				<div class="card oe" style="max-height: 170px;max-width:130px ; ">
					<a href="#"><img src=".\img\pagina-inicial\siganos.png" class="card-img-top" alt="..." style="max-height: 100px; width:130px ; "></a>
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
					<h1 class="top_s">Conheça as Instituições parceiras!</h1>
				</div>
				<div class="card-group   ta m-4">

				@foreach($abrigos as $abrigo)
				<div class="card border tamanhoCard d-flex align-itens-center justify-content-center text-center ">
					<div class="card-body ">
					
					
						<th><img src="/img/events/{{ $abrigo->image }}" class="img-fluid" alt="{{ $abrigo->image }}" style="height: 150px "></th>
						<h4 scope="row">{{$abrigo->razaoSocial}}</h4>
						<h6>{{ $abrigo->cnpj }}</h6>
						<h6>{{ $abrigo->cidade }}</h6>
						<button type="button" class="btn btn-primary m-4">Conhecer</button>		   
					</div>
				</div>
				@endforeach
				</div>
				<div class="d-grid gap-2 col-3 mx-auto pt-5 mb-5">
					<button class="btn btn btn-primary" type="button">Visualizar mais Parceiros</button>
				</div>
			</div>
		</div>
	</div>				
@endsection