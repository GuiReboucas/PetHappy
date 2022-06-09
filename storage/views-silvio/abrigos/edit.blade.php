@extends('layouts.app')

@section('title', 'Editar')

@section('content')
<div class="container" style="width: 440px;">
    <h1 class="m-2 fs-3 alert bg-primary text-light text-center">Editar cadastro do animal</h1>
</div>
<div class="container mt-3 bg-primary border border-primary" style="width: 400px;">

    <form class="form-group bg-primary" action="{{ route('animais-update',['id'=>$animais->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group bg-primary">
            <div class="form-group">
                <div class="container mt-3" enctype="multipart/form-data">
                    <img src="{{ url($animais->foto) }}" class="card-img-top" alt="foto" style="width: 90px;"><br>
                </div>
                <label class="text-light" for="foto">Foto: </label>
                <input type="text" class="form-control" name="foto" id="" value="{{$animais->foto}}">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="nome">Nome: </label>
                <input type="text" class="form-control" name="nome" id="" value="{{$animais->nome}}">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="especie">Espécie: </label>
                <input type="text" class="form-control" name="especie" id="" value="{{$animais->especie}}">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="raca">Raça: </label>
                <input type="text" class="form-control" name="raca" id="" value="{{$animais->raca}}">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="idade">Idade: </label>
                <input type="text" class="form-control" name="idade" id="" value="{{$animais->idade}}">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="chip">Chip: </label>
                <input type="text" class="form-control" name="chip" id="" value="{{$animais->chip}}">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="sexo">Sexo: </label>
                <input type="text" class="form-control" name="sexo" id="" value="{{$animais->sexo}}">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="peso">Peso: </label>
                <input type="text" class="form-control" name="peso" id="" value="{{$animais->peso}}">
            </div><br>
            <div class="form-group">
                <label class="text-light" for="origem">Origem: </label>
                <input type="text" class="form-control" name="origem" id="" value="{{$animais->origem}}">
            </div><br>
        </div>
        <div class="container" style="width: 440px;">
            <input type="submit" class="btn btn-secondary m-2 text-light" name="submit" value="Atualizar">
            <a href="{{ route('animais-index')}}" class="btn btn-success m-2 text-light">Voltar</a>
        </div>
    </form>
</div>


@endsection
