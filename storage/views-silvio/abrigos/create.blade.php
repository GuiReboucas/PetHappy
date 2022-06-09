@extends('PetHappy.layouts.main')

@section('title', 'Novo Abrigo')

@section('content')
<div class="container" style="width: 440px;">
    <h1 class="mt-1 fs-3 alert alert-dark bg-dark text-light text-center">Cadastrar Novo Abrigo</h1>
</div>
<div class="container mt-1 bg-dark rounded" style="width: 400px;">
    <form action="{{ route('abrigos-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label class="text-light" for="logo">Logo</label>
                <input type="file" class="form-control" name="logo" placeholder="Insira a foto...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="nome">Nome: </label>
                <input type="text" class="form-control" name="nome" id="" placeholder="Digite um nome...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="historia">História: </label>
                <input type="text" class="form-control" name="historia" id="" placeholder="Digite a espécie...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="colaborador">Colaborador: </label>
                <input type="file" class="form-control" name="colaborador" id="" placeholder="Digite a raça...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="funcao">Função: </label>
                <input type="text" class="form-control" name="funcao" id="" placeholder="Digite a idade atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="localizacao">Localização: </label>
                <input type="text" class="form-control" name="localizacao" id="" placeholder="Digite o número do chip...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="hora_func">Horário de Funcionamento: </label>
                <input type="text" class="form-control" name="hora_func" id="" placeholder="Digite o sexo...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="evento1">Evento1: </label>
                <input type="number" class="form-control" name="evento1" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="img_evento1">Imagem Evento1: </label>
                <input type="file" class="form-control" name="img_evento1" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="evento2">evento2: </label>
                <input type="text" class="form-control" name="evento2" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="img_evento2">Imagem Evento2: </label>
                <input type="file" class="form-control" name="img_evento2" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="evento3">Evento3: </label>
                <input type="text" class="form-control" name="evento3" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="img_evento3">Imagem Evento3: </label>
                <input type="file" class="form-control" name="img_evento3" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="pix">Pix: </label>
                <input type="text" class="form-control" name="pix" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="banco">Banco: </label>
                <input type="text" class="form-control" name="banco" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="agencia">Agência: </label>
                <input type="text" class="form-control" name="agencia" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="conta">Conta: </label>
                <input type="text" class="form-control" name="conta" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="cnpj">CNPJ: </label>
                <input type="text" class="form-control" name="cnpj" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="local">Local: </label>
                <input type="text" class="form-control" name="local" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="endereco">Endereço: </label>
                <input type="text" class="form-control" name="endereco" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="animais_id">Animal: </label>
                <input type="text" class="form-control" name="animais_id" id="" placeholder="Digite o peso atual...">
            </div><br>
        </div>
        <div class="container mt-1" style="width: 440px;">
            <div class="form-group">
                <input type="submit" class="btn btn-primary m-2 text-light" name="submit">
                <a href="{{ route('abrigos-index')}}" class="btn btn-success m-2 text-light">Voltar</a>
            </div>
        </div>
    </form>
</div>


@endsection
