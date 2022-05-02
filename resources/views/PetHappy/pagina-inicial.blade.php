@extends('PetHappy.layouts.main')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@section('content')

<body>


<!-- Slide-->
<div class="oneSlyde">
    <div class="oneSlydeTitulo">
        <h1> Bem vindo ao PetHappy!</h1>
    </div>
    <div class="oneSlydeParagrafo">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos vel, dolorem ducimus ad exercitationem est quo deserunt sed facere perspiciatis non pariatur, rem assumenda, labore sequi obcaecati aperiam nulla nam?</p>
    </div>
        
    <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn-primary" type="button">Torne-se  nosso parceiro</button>
    </div>
</div>
<!-- Cards-->
<div class="cardInicial mt-5 " style="width: 18rem;">
    <img src="./img/cachorro.jpg" class="card-img-top h-50 d-inline-block" alt="...">
    <div class="card-body   bg-warning ">
      <h5 class="card-title text-center">José</h5>
      <p class="card-text">Ong : Luva de Pedreiro saturou</p>
      <p class="card-text">Estado : Bahia</p>
      
    </div>
  </div>











</body>

@endsection
