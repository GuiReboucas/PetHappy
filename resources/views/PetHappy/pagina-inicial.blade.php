@extends('PetHappy.layouts.main')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@section('content')

<body>


<!-- Slide-->

<div class="oneSlyde " style="height: 500px">
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

    {{-- <div class="cardInicial mt-5 " style="width: 18rem;">
        <img src="./img/cachorro.jpg" class="card-img-top h-50 d-inline-block" alt="...">
        <div class="card-body   bg-warning ">

        <h5 class="card-title text-center">José</h5>
        <p class="card-text">Ong : Luva de Pedreiro saturou</p>
        <p class="card-text">Estado : Bahia</p>
        
        </div>
    </div> --}}
    <main>
<div class="backgroudColoCard" >
    <div class="row">
        <div class="col-md-12">
            <div class="tituloCard pt-5" >
                <h1>Conheça alguns dos nossos amiginhos!</h1>
            </div>
            <div class="card-group w-75 p-3 ">
                
                <div class="card border ">
                <img class="card-img-top" src="./img/cachorro.jpg" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">Nome: Jorge</h2>
                    <h6 class="card-text">Ong: Cachorro feliz</h6>
                    <h6 class="card-text">Estado: Ba</h6>
                </div>
                </div>

                <div class="card border">
                <img class="card-img-top" src="./img/cachorro.jpg" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">Nome: Jorge</h2>
                    <h6 class="card-text">Ong: Cachorro feliz</h6>
                    <h6 class="card-text">Estado: Ba</h6>
                </div>
                </div>

                <div class="card border" >
                <img class="card-img-top" src="./img/cachorro.jpg" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">Nome: Jorge</h2>
                    <h6 class="card-text">Ong: Cachorro feliz</h6>
                    <h6 class="card-text">Estado: Ba</h6>
                </div>
                </div>

                <div class="card border">
                    <img class="card-img-top" src="./img/cachorro.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Nome: Jorge</h2>
                        <h6 class="card-text">Ong: Cachorro feliz</h6>
                        <h6 class="card-text">Estado: Ba</h6>
                    </div>
                </div>

                <div class="card border">
                    <img class="card-img-top" src="./img/cachorro.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Nome: Jorge</h2>
                        <h6 class="card-text">Ong: Cachorro feliz</h6>
                        <h6 class="card-text">Estado: Ba</h6>
                    </div>
                </div>


            </div>

            <div class="d-grid gap-2 col-2 mx-auto pt-5">
                <button class="btn btn btn-outline-danger" type="button">Visualizar mais animais</button>
                </div>
        </div>
    </div>   
</div>

<!-- POR QUE ADOTAR? -->

<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="./img/cachorro.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Por que adotar?</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3 ml-auto " style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4 .float-right ">
        <img src="./img/cachorro.jpg" class="img-fluid rounded-end  " alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Por que adotar?</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="./img/cachorro.jpg" class="rounded float-end" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Por que adotar?</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row campanha">
      <div class="col-md-12 d-flex align-itens-center justify-content-center text-center">
        <div class="retangulo" id="titulo">
           <h1> Ajude também os nossos parceiros!</h1>
           <h2 class="subtitulo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores autem voluptate dolore voluptatem, repellat velit non. Dicta error maiores, maxime repellendus tempore veritatis similique iusto eius? Laudantium delectus ipsum sed?</h2>
           <h1> Ajude também os nossos parceiros!</h1>
           <h2 class="subtitulo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores autem voluptate dolore voluptatem, repellat velit non. Dicta error maiores, maxime repellendus tempore veritatis similique iusto eius? Laudantium delectus ipsum sed?</h2>
        </div>
        
      </div>

      <div id="team-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="main-title">Nosso time</h3>
            </div>
            <div class="col-md-4">
              <div class="card abaixo">
                <img src="./img/cachorro.jpg" class="card-img-top" alt="Imagem de Perfil 1">
                <div class="card-body">
                  <h5 class="card-title">Pix</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card abaixo">
                <img src="./img/cachorro.jpg" class="card-img-top" alt="Imagem de Perfil 2">
                <div class="card-body">
                  <h5 class="card-title">Transferência bancária</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card abaixo">
                <img src="./img/cachorro.jpg" class="card-img-top" alt="Imagem de Perfil 3">
                <div class="card-body">
                  <h5 class="card-title">Em espécie</h5>
                  
                </div>
              </div>
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
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<main>



</body>

@endsection
