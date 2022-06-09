@extends('layouts.app')
    
@section('content')

@section('styles')
<link  href="css/cadastro.css" rel="stylesheet">
@endsection

<body>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div id="cad-animais-container" class="col-md-6 offset-md-3">
  <h1>Cadastre o Abrigo</h1>
  <form action="/cadastro/cadastroInstituicao" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="image"> Foto:</label>
        <input type="file" class="form-control-file" id="image" name="image" >
    </div>
    <div class="form-group">
        <label for="title"> Razão Social:</label>
        <input type="text" class="form-control" id="razaoSocial" name="razaoSocial" placeholder="razaoSocial">
    </div>
    <div class="form-group">
        <label for="title"> Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email">
    </div>
    <div class="form-group">
        <label for="title"> CNPJ:</label>
        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="cnpj">
    </div>
    <div class="form-group">
        <label for="title"> Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
    </div>
    <div class="form-group">
        <label for="title"> Telefone:</label>
        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="telefone">
    </div>
    <div class="form-group">
        <label for="title"> Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="endereco">
    </div>
    <div class="form-group">
        <label for="title"> Bairro:</label>
        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="bairro">
    </div>
    <div class="form-group">
        <label for="title"> CEP:</label>
        <input type="text" class="form-control" id="cep" name="cep" placeholder="cep">
    </div>
    <div class="form-group">
        <label for="title"> Cidade:</label>
        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="cidade">
    </div>
    <div class="form-group">
        <label for="title"> Numero:</label>
        <input type="text" class="form-control" id="numeroResidencia" name="numeroResidencia" placeholder="Numero">
    </div>
    <div class="form-group">
        <label for="title"> Animais ID:</label>
        <input type="text" class="form-control" id="animais_id" name="animais_id" placeholder="Numero">
    </div>
    
    <input type="submit" class="btn btn-primary" value="Cadastrar!">

  </form>
</div>







    
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



</body>

@endsection
