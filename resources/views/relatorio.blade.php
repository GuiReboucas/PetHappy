@extends('layouts.app')

@section('title', 'Relatório')

@section('styles')
    <link rel="stylesheet" href="./css/relatorio.css">
@endsection

@section('content')
    <div class="container-relatorio">
        <div id="box-relatorio">
            <h1>Relatório geral</h1>
            <br>
            <hr> <br>

            <p>Animais cadastrados: 22</p>
            <p>Animais adotados: 50</p>
            <p>Animais excluídos: 3</p>
            <br>
            <hr> <br>
            <p>Doações monetárias recebidas: 1.000,00</p>
            <p>Doações de materiais recebidos: 8</p>
            <p>Doações de remédios recebidos: 15</p>
            <br>
            <hr> <br>
            <p>Feedbacks recebidos: 11</p>
        </div>
        <br>
        <hr> <br>
        <div id="box-botoes">
            <button type="button" class="btn btn-outline-danger  btn-lg">Excluír</button>
            <button type="button" class="btn btn-outline-primary  btn-lg">Enviar</button>
        </div>
    </div>
@endsection