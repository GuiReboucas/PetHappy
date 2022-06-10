@extends('layouts.app')

@section('title', 'Perfil')

@section('styles')
	<link rel="stylesheet" href="./css/usuario/show.css">
@endsection

@section('content')
	<section class="nav_tabs">
		<ul>
			<li>
				<input type="radio" name="tabs" class="rd_tabs" id="tab1" checked>
				<label for="tab1" class="label">Perfil</label>
				<div class="content container_sobre">
					<br>
					<h1>Sobre</h1>
					<div>
						<div class="box-icone-sobre">
							<div class="box-img ">
								<div id="titulo-img-sobre">
									<h2>Magnus Ferreira Gomes</h2>
								</div>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<div class="box-tabs">
						<section>
							<div class="item-pai">
								<table class="table">
									<thead>
										<h2>Dados pessoais</h2>
										<br>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Nome</th>
											<th scope="col">E-mail</th>
											<th scope="col">Idade</th>
											<th scope="col">CPF</th>
											<th scope="col">Senha</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Magnus Ferreira Gomes</td>
											<td>magnusFG@gmail.com</td>
											<td>25 Anos</td>
											<td>000.000.000-00</td>
											<td>xxxxxxx</td>
										</tr>
									</tbody>
								</table>
								<br>
								<hr>
								<table class="table">
									<thead>
										<h2>Localização</h2>
										<br>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Cidade</th>
											<th scope="col">Estado</th>
											<th scope="col">Logradouro</th>
											<th scope="col">Número</th>
											<th scope="col">Bairro</th>
											<th scope="col">CEP</th>
											<th scope="col">Complemento</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Feira de Santana</td>
											<td>BA</td>
											<td>Castro Alves</td>
											<td>9758</td>
											<td>Tomba</td>
											<td>96167-807</td>
											<td>Andar 6</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
					</div>
				</div>
			</li>
			<li>
				<input type="radio" name="tabs" class="rd_tabs" id="tab2">
				<label for="tab2" class="label">Adoções</label>
				<div class="content" id="container_adocoes">
					<h1>Meus Pets</h1>
					<hr>
					<div class="box-tabs">

						<div class="box-pai_1">
							<div class="box-filho_2">
								<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<div class="row row-cols-1 row-cols-md-3 g-4">
												<div class="col">
													<div class="cards">
														<img src="./img/usuario/show/cachorro_1.jpg"
															class="card-img-top img-card-box-icone rounded-circle"
															alt="...">
														<div class="card-body">
															<h5 class="card-title">Ted</h5>
															<a href="#" class="btn btn-primary">Detalhes</a>
														</div>
													</div>
												</div>
												<div class="col">
													<div class="cards">
														<img src="./img/usuario/show/cachorro_2.jpg"
															class="card-img-top img-card-box-icone rounded-circle"
															alt="...">
														<div class="card-body">
															<h5 class="card-title">Pipa</h5>
															<a href="#" class="btn btn-primary">Detalhes</a>
														</div>
													</div>
												</div>
												<div class="col">
													<div class="cards">
														<img src="./img/usuario/show/cachorro_3.jpg"
															class="card-img-top img-card-box-icone rounded-circle"
															alt="...">
														<div class="card-body">
															<h5 class="card-title">Carl</h5>
															<a href="#" class="btn btn-primary">Detalhes</a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="carousel-item">
											<div class="row row-cols-1 row-cols-md-3 g-4">
												<div class="col">
													<div class="cards">
														<img src="./img/usuario/show/cachorro_4.jpg"
															class="card-img-top img-card-box-icone rounded-circle"
															alt="...">
														<div class="card-body">
															<h5 class="card-title">Samanta</h5>
															<a href="#" class="btn btn-primary">Detalhes</a>
														</div>
													</div>
												</div>

												<div class="col">
													<div class="cards">
														<img src="./img/usuario/show/cachorro_5.jpg"
															class="card-img-top  img-card-box-icone rounded-circle"
															alt="...">
														<div class="card-body">
															<h5 class="card-title">Magda</h5>
															<a href="#" class="btn btn-primary">Detalhes</a>
														</div>
													</div>
												</div>

												<div class="col">
													<div class="cards">
														<img src="./img/usuario/show/cachorro_6.jpg"
															class="card-img-top img-card-box-icone rounded-circle"
															alt="...">
														<div class="card-body">
															<h5 class="card-title">Zuli</h5>
															<a href="#" class="btn btn-primary">Detalhes</a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="carousel-item">
											<div class="row row-cols-1 row-cols-md-3 g-4">
												<div class="col">
													<div class="cards">
														<img src="./img/usuario/show/gato_1.webp"
															class="card-img-top img-card-box-icone rounded-circle"
															alt="...">
														<div class="card-body">
															<h5 class="card-title">João</h5>
															<a href="#" class="btn btn-primary">Detalhes</a>
														</div>
													</div>
												</div>

												<div class="col">
													<div class="cards">
														<img src="./img/usuario/show/gato_2.webp"
															class="card-img-top img-card-box-icone rounded-circle"
															alt="...">
														<div class="card-body">
															<h5 class="card-title">Jhon</h5>
															<a href="#" class="btn btn-primary">Detalhes</a>
														</div>
													</div>
												</div>

												<div class="col">
													<div class="cards">
														<img src="./img/usuario/show/cachorro_7.jpg"
															class="card-img-top img-card-box-icone rounded-circle"
															alt="...">
														<div class="card-body">
															<h5 class="card-title">Paulo</h5>
															<a href="#" class="btn btn-primary">Detalhes</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div id="controladores-local-user">
										<button class="carousel-control-prev" type="button"
											data-bs-target="#carouselExampleControls" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Previous</span>
										</button>
										<button class="carousel-control-next" type="button"
											data-bs-target="#carouselExampleControls" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Next</span>
										</button>
									</div>
								</div>
							</div>
							<br>
							<hr>
							<h1>Meus Status</h1>
							<br>
							<div class="box-pai_2">
								<div class="box-filho_2">
									<img src="./img/usuario/show/bandeira.png" class="img-card-box-icone-bandeira rounded-circle" alt="">
								</div>
								<div class="box-filho_2">
									<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
										Esse earum fugiat alias fugit, autem ducimus illo reiciendis magnam, debitis
										dolore laborum a praesentium suscipit accusamus excepturi at sequi nihil
										deleniti!</p>
								</div>
							</div>
						</div>
					</div>
				
			</li>
			<li>
				<input type="radio" name="tabs" class="rd_tabs" id="tab3">
				<label for="tab3" class="label">Doações</label>
				<div class="content" id="conteiner_doacoes">
					<br>
					<div class="titulo-doacoes">
						<hgroup>
							<div class="titulo-doacoes">
								<h1>Doações monetárias</h1>
							</div>

							<div class="titulo-doacoes">
								<h1 id="titulo-doacoes-secudario">200,00R$</h1>
							</div>
						</hgroup>
					</div>
					<br>
					<br>
					<br>
					<hr>
					<div class="box-teste">
						<div class="box-box">
							<img src="./img/usuario/show/icone-doacao-cash.png" alt="..." class="img-box-cash">
						</div>
								
						<div class="box-box" id="box-box-carrosel">
							<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="row row-cols-1 row-cols-md-3 g-4">
											<div class="col">
												<div class="cards-abrigo">
													<img src="./img/usuario/show/abrigo2.jpg"
														class="card-img-top w-75 img-abrigo" alt="...">
													<div class="card-conteudo">
														<a href="#" class="btn btn-primary">Detalhes</a>
													</div>
												</div>
											</div>

											<div class="col">
												<div class="cards-abrigo ">
													<img src="./img/usuario/show/abrigo3.jpg"
														class="card-img-top w-75 img-abrigo " alt="...">
													<div class="card-conteudo">
														<a href="#" class="btn btn-primary">Detalhes</a>
													</div>
												</div>
											</div>

											<div class="col">
												<div class="cards-abrigo ">
													<img src="./img/usuario/show/abrigo2.jpg"
														class="card-img-top w-75 img-abrigo" alt="...">
													<div class="card-conteudo">
														<a href="#" class="btn btn-primary">Detalhes</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row row-cols-1 row-cols-md-3 g-4">
											<div class="col">
												<div class="cards-abrigo">
													<img src="./img/usuario/show/abrigo3.jpg"
														class="card-img-top w-75 img-abrigo" alt="...">
													<div class="card-conteudo">
														<a href="#" class="btn btn-primary">Detalhes</a>
													</div>
												</div>
											</div>

											<div class="col">
												<div class="cards-abrigo">
													<img src="./img/usuario/show/abrigo2.jpg"
														class="card-img-top w-75 img-abrigo" alt="...">
													<div class="card-conteudo">
														<a href="#" class="btn btn-primary">Detalhes</a>
													</div>
												</div>
											</div>

											<div class="col">
												<div class="cards-abrigo">
													<img src="./img/usuario/show/abrigo3.jpg"
														class="card-img-top w-75 img-abrigo" alt="...">
													<div class="card-conteudo">
														<a href="#" class="btn btn-primary">Detalhes</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row row-cols-1 row-cols-md-3 g-4">
											<div class="col">
												<div class="cards-abrigo">
													<img src="./img/usuario/show/abrigo2.jpg"
														class="card-img-top w-75 img-abrigo" alt="...">
													<div class="card-conteudo">
														<a href="#" class="btn btn-primary">Detalhes</a>
													</div>
												</div>
											</div>

											<div class="col">
												<div class="cards-abrigo">
													<img src="./img/usuario/show/abrigo3.jpg"
														class="card-img-top w-75 img-abrigo " alt="...">
													<div class="card-conteudo">
														<a href="#" class="btn btn-primary">Detalhes</a>
													</div>
												</div>
											</div>

											<div class="col">
												<div class="cards-abrigo ">
													<img src="/Local usuário/" class="card-img-top w-75  img-abrigo"
														alt="...">
													<div class="card-conteudo">
														<a href="#" class="btn btn-primary">Detalhes</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="titulo-doacoes-materiais">
						<hgroup>
							<div class="titulo-doacoes-materiais">
								<h1>Doações de materiais</h1>
							</div>
							<div class="titulo-doacoes-materiais">
								<h1 id="titulo-doacoes-materiais-secundario">12 itens</h1>
							</div>
						</hgroup>
					</div>
					<br>
					<br>
					<br>
					<hr>
					<br>
					<div class="box-doacao-material">
						<div><img src="./img/usuario/show/brinquedo.png" class="img-doacao-material" alt="">
							<div>
								<h4>Brinquedos:</h4>
								<h5>4 itens</h5>
							</div>
						</div>

						<div><img src="./img/usuario/show/ração.png" class="img-doacao-material" alt="">
							<div>
								<h4>Alimentos:</h4>
								<h5>4 itens</h5>
							</div>
						</div>

						<div><img src="./img/usuario/show/remedio.png" class="img-doacao-material" alt="">
							<div>
								<h4>Remédios:</h4>
								<h5>4 itens</h5>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</section>
@endsection