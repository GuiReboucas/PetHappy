@extends('layouts.app')

@section('title', $animais->nome)

@section('content')

<div class="container-xl">
    <div class="row justify-content-lg-center mt-5">
        <div class="col-sm-3 card bg-light shadow-lg p-2">
            <div class="card-body ">
                <img src="{{ url($animais->foto) }}" class="card-img-top" alt="foto" style="width: 250px;">
                <ul class="list-group">
                    <li class="list-group-item card-title text-dark fs-2 text-center border-0">{{ $animais->nome }}</li>
                    <li class="list-group-item card-title text-dark text-center bg-light border-0">{{ $animais->chip }}</li>
                </ul><br>
            </div>
        </div>
        <div class="col-sm-2 card bg-light shadow-lg p-2">
            <li class="list-group-item card-title text-dark bg-light border border-dark border-2">{{ $animais->especie }}</li>
            <li class="list-group-item card-title text-dark bg-light border border-dark border-2">{{ $animais->raca }}</li>
            <li class="list-group-item card-title text-dark bg-light border border-dark border-2">{{ $animais->idade }} Anos</li>
            <li class="list-group-item card-title text-dark bg-light border border-dark border-2">{{ $animais->sexo }}</li>
            <li class="list-group-item card-title text-dark bg-light border border-dark border-2">{{ $animais->peso }} Kg</li>
            <li class="list-group-item card-title text-dark bg-light border border-dark border-2">{{ $animais->origem }}</li>
            <!-- <div class="container" style="width: 440px;">
                <div class="container justify-content-center" style="width: 400px;"> -->
                    <form action="{{ route('animais-destroy', ['id'=>$animais->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Deletar</button>
                        <a class="btn btn-success m-2 text-light" href="{{ route('animais-index') }}">Voltar</a>
                    </form>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>

@endsection
