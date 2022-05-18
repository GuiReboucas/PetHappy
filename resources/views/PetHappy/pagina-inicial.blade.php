@extends('PetHappy.layouts.main')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/paginaInicial.css">
@section('content')

<body>

<main>
<!-- Slide-->

<div class="oneSlyde " style="height: 600px">
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

<div class="container-fluid o" >
  <div class="row">
    <div class="col-md-12 colorCard ">
      <div class="col-md-12 text-center ">
          <h1 class="top_s">Conheça alguns dos nossos amiginhos!</h1>
      </div>        
      <div class="card-group   ta">
          
        <div class="card border tamanhoCard rounded-9">
          <img class="card-img-top rounded-9" src="./img/cachorro.jpg" alt="Card image cap" style="height: 200px;border-radius: 30px 30px 0px 0px"  >
          <div class="card-body " >
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

        <div class="card border tamanhoCard" >
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

<div class="d-flex align-items-start flex-column pdCard" >
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

<div class="d-flex align-items-end flex-column pdCard" >
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

<div class="d-flex align-items-start flex-column pdCard" >
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

        
<div class="container " >
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
        <div class="card oe  "style="max-height: 170px; max-width:130px ; ">
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
      <div class="card oe  "style="max-height: 170px; max-width:130px ; ">
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
 
<div class="container-fluid o " >
  <div class="row ">
    <div class="col-md-12 colorCard ">
      <div class="col-md-12 text-center ">
          <h1 class="top_s">Instituições Parceiras!</h1>
      </div>        
      <div class="card-group   ta m-4">
          
        <div class="card border tamanhoCard d-flex align-itens-center justify-content-center text-center ">
          <img class="card-img-top " src="./img/cachorro.jpg" alt="Card image cap" style="height: 200px;border-radius: 30px 30px 0px 0px"  >
          <div class="card-body " >
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

        <div class="card border tamanhoCard d-flex align-itens-center justify-content-center text-center" >
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
</main>

</body>

@endsection
