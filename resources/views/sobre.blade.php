@extends('layouts.app')

@section('title', 'Sobre a PetHappy')

@section('content')
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-12">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-center">
                            <h1 class="display-1 lh-1 mb-3">Sobre a PetHappy</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Quote/testimonial aside-->
        <aside class="text-center bg-gradient-primary-to-secondary py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-12">
                        <div class="h2 fs-1 text-white mb-0">Quem somos?</div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- App features section-->
        <div class="container">
            <div class="container p-5 align-items-center">
                <div class="col-12 text-center justify-content-center align-items-center">
                    <img class="img-sobre my-5 img-fluid mx-auto d-block" src="./img/sobre/general/sobre-animais.jpeg" alt="">
                    <p class="w-50 m-auto">Nós somos a PetHappy. Surgimos em 2022 com a proposta de ajudar as Ongs, as pessoas e os animais em processo de adoção. E para facilitar e agilizar esse trabalho, criamos esta plataforma.</p>
                    <br>
                    <p class="w-50 m-auto">Aqui você busca rapidamente os animais disponíveis para adoção e rapidamente seu interesse será notado pelas instituições parceiras.</p>                    
                </div>
            </div>
        </div>

        <!-- Quote/testimonial aside-->
        <aside class="text-center bg-gradient-primary-to-secondary py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-12">
                        <div class="h2 fs-1 text-white mb-0">Como funciona?</div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- App features section-->
        <div class="container">
            <div class="container p-5 align-items-center">
                <div class="col-12 text-center">
                    <img class="img-sobre my-5 img-fluid mx-auto d-block" src="./img/sobre/general/sobre-ongs.webp" alt="">
                    <h2>Busque:</h2>
                    <p class="w-50 m-auto">1. Em nossa lista de Animais aparecerão todos os animais disponíveis para adoção.</p>
                    <br>
                    <p class="w-50 m-auto">2. Esses animais são cadastrados pelas instituições. Então basta confirmar as informações como: localidade, status clínicos, etc e ver se está tudo nos conformes.</p>
                    <br>
                    <h2>Adote:</h2>
                    <p class="w-50 m-auto">1. Selecione o animal desejado.</p>
                    <br>
                    <p class="w-50 m-auto">2. Clique em adotar.</p>
                    <br>
                    <p class="w-50 m-auto">3. Preencha o formulário.</p>
                    <br>
                    <p class="w-50 m-auto">4    . Pronto. Após isso a instituição irá entrar em contato com você para dar fim ao processo.</p>    
                </div>
            </div>
        </div>
@endsection