@extends('layouts.app')
  <link rel="stylesheet" href="./css/instituicoes.css">
@section('content')

<body>

  <div class="container-fluid o ">
		<div class="row ">
			<div class="col-md-12 colorCard ">
				<div class="col-md-12 text-center ">
					<h1 class="top_s">Conheça as Instituições parceiras!</h1>
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

    
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



</body>

@endsection
