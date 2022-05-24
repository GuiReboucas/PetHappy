@extends('layouts.app')

@section('title', 'Novo Animal')

@section('content')
<div class="container" style="width: 440px;">
    <h1 class="m-2 fs-3 alert alert-dark bg-dark text-light text-center">Cadastrar Novo Animal</h1>
</div>
<div class="container mt-1 bg-dark rounded" style="width: 400px;">
    <form action="{{ route('animais-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label class="text-light" for="foto">Foto: </label>
                <input type="file" class="form-control" name="foto" placeholder="Insira a foto...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="nome">Nome: </label>
                <input type="text" class="form-control" name="nome" id="" placeholder="Digite um nome...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="especie">Espécie: </label>
                <input type="text" class="form-control" name="especie" id="" placeholder="Digite a espécie...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="raca">Raça: </label>
                <input type="text" class="form-control" name="raca" id="" placeholder="Digite a raça...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="idade">Idade: </label>
                <input type="number" class="form-control" name="idade" id="" placeholder="Digite a idade atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="chip">Chip: </label>
                <input type="text" class="form-control" name="chip" id="" placeholder="Digite o número do chip...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="sexo">Sexo: </label>
                <input type="text" class="form-control" name="sexo" id="" placeholder="Digite o sexo...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="peso">Peso: </label>
                <input type="number" class="form-control" name="peso" id="" placeholder="Digite o peso atual...">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="origem">Origem: </label>
                <input type="text" class="form-control" name="origem" id="" placeholder="Digite o peso atual...">
            </div><br>
        </div>
        <div class="container mt-1" style="width: 440px;">
            <div class="form-group">
                <input type="submit" class="btn btn-primary m-2 text-light" name="submit">
                <a href="{{ route('animais-index')}}" class="btn btn-success m-2 text-light">Voltar</a>
            </div>
        </div>
    </form>
</div>


@endsection
