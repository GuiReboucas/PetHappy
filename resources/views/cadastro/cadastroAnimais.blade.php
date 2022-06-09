@extends('layouts.app')
    
@section('content')

@section('styles')
<link  href="css/cadastro.css" rel="stylesheet">
@endsection

<body>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div id="cad-animais-container" class="col-md-6 offset-md-3">
  <h1>Cadastre o animal</h1>
  <form action="/cadastro" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="image"> Foto:</label>
        <input type="file" class="form-control-file" id="image" name="image" >
    </div>
    <div class="form-group">
        <label for="title"> Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="title"> Especie:</label>
        <input type="text" class="form-control" id="especie" name="especie" placeholder="Especie">
    </div>
    <div class="form-group">
        <label for="title"> Raça:</label>
        <input type="text" class="form-control" id="raca" name="raca" placeholder="Raça">
    </div>
    <div class="form-group">
        <label for="title"> Nascimento:</label>
        <input type="date" class="form-control" id="nascimento" name="nascimento" placeholder="Nascimento">
    </div>
    <div class="form-group">
        <label for="title"> Sexo:</label>
        <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Sexo">
    </div>
    <div class="form-group">
        <label for="title"> Peso:</label>
        <input type="text" class="form-control" id="peso" name="peso" placeholder="Peso">
    </div>
    <div class="form-group">
        <label for="title"> Saude do animal:</label>
        <input type="text" class="form-control" id="dadosSaude" name="dadosSaude" placeholder="Saude dno animal">
    </div>
    <div class="form-group">
        <label for="title"> Observação:</label>
        <textarea type="text" class="form-control" id="observacao" name="observacao" placeholder="observação"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Cadastrar!">

  </form>
</div>







    
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



</body>

@endsection
