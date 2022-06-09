@extends('layouts.main')

@section('title', 'Lista de Abrigos')

@section('content')
<div class="container mt-2">
    <div class="row alert alert-primary">
        <div class="col-sm-11 position-relative">
            <h1 class="position-absolute top-50 start-50 translate-middle fs-3">Abrigos Cadastrados</h1>
        </div>
        <div class="col-sm-1">
            <a href="{{ route('abrigos-create')}}" class="btn btn-success mt-2">Novo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 border border-dark" style="display:contents;">
            @foreach($abrigos as $abrigo)
            <div class="row mt-3 m-2">
                <div class="col-sm-6 card shadow-lg p-1" style="width: 180px;">
                    <div class="card-body" style="height: 200px;">

                        <ul class="list-group">
                            <li class="list-group-item card-title border-0">
                                <img src="{{ url($abrigo->logo) }}" class="m-2" alt="foto" style="width: 110px;height: 110px;">
                            </li>
                            <li class="list-group-item card-title text-dark text-center border-0 fs-3">{{ $abrigo->nome }}</li>
                            <li class="list-group-item card-title text-dark text-center border-0 fs-7">{{ $abrigo->historia }}</li>
                        </ul><br>
                    </div>
                </div>
                <div class="col-sm-5 card bg-light shadow-lg p-1 fs-8" style="width: 180px;">
                    <!-- <li class="list-group-item card-title text-dark bg-light border border-dark border-2">{{ $animal->especie }}</li> -->
                    <li class="list-group-item card-title text-dark bg-light">{{ $abrigo->colaborador }}</li>
                    <li class="list-group-item card-title text-dark bg-light">{{ $abrigo->funcao }}</li>
                    <!-- <li class="list-group-item card-title text-dark bg-light border border-dark border-2">{{ $animal->sexo }}</li> -->
                    <li class="list-group-item card-title text-dark bg-light">{{ $abrigo->localizacao }}</li>
                    <li class="list-group-item card-title text-dark bg-light">{{ $abrigo->hora_func }}</li>
                    <a href="{{ route('abrigos-show', ['id'=>$abrigo->id]) }}" class=" list-group-item card-title btn btn-primary">Ver
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </a>
                    <a href="{{ route('abrigos-edit', ['id'=>$abrigo->id]) }}" class="list-group-item card-title btn btn-success">Editar
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- <table class="table table-light">
        <thead class="table table-dark border border-dark border-2">
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Chip</th>
                <th scope="col">Foto</th>
                <th scope="col">Nome</th>
                <th scope="col">Espécie</th>
                <th scope="col">Raça</th>
                <th scope="col">Idade</th>
                <th scope="col">Sexo</th>
                <th scope="col">Peso</th>
                <th scope="col">Origem</th>
                <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animais as $animal)
            <tr class="text-center">
                <th>{{$animal->id}}</th>
                <th>{{$animal->chip}}</th>
                <th><img src="{{ url($animal->foto) }}" class="card-img-top" alt="foto" style="width: 40px;"></th>
                <th>{{$animal->nome}}</th>
                <th>{{$animal->especie}}</th>
                <th>{{$animal->raca}}</th>
                <th>{{$animal->idade}}</th>
                <th>{{$animal->sexo}}</th>
                <th>{{$animal->peso}}</th>
                <th>{{$animal->origem}}</th>
                <th>
                    <a href="{{ route('animais-edit', ['id'=>$animal->id]) }}" class="btn btn-success me-2">Editar
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </a>
                    <a href="{{ route('animais-show', ['id'=>$animal->id]) }}" class="btn btn-primary me-2">Ver
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table> -->
</div>
@endsection
