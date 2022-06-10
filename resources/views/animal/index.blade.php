@extends('layouts.app')

@section('title', 'Animais')

@section('content')
    <!-- Quote/testimonial aside-->
    <aside class="text-center bg-gradient-primary-to-secondary py-5">
        <div class="container">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="fs-1 text-white text-center mb-0">CONFIRA NOSSA LISTA DE ANIMAIS</div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Cards-->
    <div class="container">
        <div class="row m-auto">
            @foreach($animais as $animal)
                <div class="col-md-6 col-lg-4 pb-3 mt-5">
                    <div class="card card-custom bg-white border-white border-0 rounded-0">
                        <div class="card-custom-img bg-gradient-primary-to-secondary"></div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid" style="object-fit: cover;" src="{{ asset('img/animal/fotos/' . $animal->image) }}" alt="Avatar"/>
                        </div>
                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-title">{{ $animal->nome }}</h4>
                            <p class="card-text" style="text-align: justify;">{{ $animal->observacao }}</p>
                        </div>
                        <div class="card-footer text-center" style="background: inherit; border-color: inherit;">
                            <a href="{{ route('animal.show', ['animal' => $animal->id]) }}" class="btn btn-primary rounded-0">Ver</a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-md-6 col-lg-4 pb-3 mt-5">
                <div class="card card-custom bg-white border-white border-0 rounded-0">
                    <div class="card-custom-img bg-gradient-primary-to-secondary"></div>
                    <div class="card-custom-avatar">
                        <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar"/>
                    </div>
                    <div class="card-body" style="overflow-y: auto">
                        <h4 class="card-title">Nome do Animal</h4>
                        <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Id ullam doloribus, autem harum, aperiam distinctio quae consequatur sit
                            consequuntur iste necessitatibus ipsa asperiores facilis quisquam rem maiores. Illum, nisi
                            sequi.</p>
                    </div>
                    <div class="card-footer text-center" style="background: inherit; border-color: inherit;">
                        <a href="" class="btn btn-primary rounded-0">Ver</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 pb-3 mt-5">
                <div class="card card-custom bg-white border-white border-0 rounded-0">
                    <div class="card-custom-img bg-gradient-primary-to-secondary"></div>
                    <div class="card-custom-avatar">
                        <img class="img-fluid"
                            src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg"
                            alt="Avatar" />
                    </div>
                    <div class="card-body" style="overflow-y: auto">
                        <h4 class="card-title">Nome do Animal</h4>
                        <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Id ullam doloribus, autem harum, aperiam distinctio quae consequatur sit
                            consequuntur iste necessitatibus ipsa asperiores facilis quisquam rem maiores. Illum, nisi
                            sequi.</p>
                    </div>
                    <div class="card-footer text-center" style="background: inherit; border-color: inherit;">
                        <a href="#" class="btn btn-primary rounded-0">Ver</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 pb-3 mt-5">
                <div class="card card-custom bg-white border-white border-0 rounded-0">
                    <div class="card-custom-img bg-gradient-primary-to-secondary"></div>
                    <div class="card-custom-avatar">
                        <img class="img-fluid"
                            src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg"
                            alt="Avatar"/>
                    </div>
                    <div class="card-body" style="overflow-y: auto">
                        <h4 class="card-title">Nome do Animal</h4>
                        <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Id ullam doloribus, autem harum, aperiam distinctio quae consequatur sit
                            consequuntur iste necessitatibus ipsa asperiores facilis quisquam rem maiores. Illum, nisi
                            sequi.</p>
                    </div>
                    <div class="card-footer text-center" style="background: inherit; border-color: inherit;">
                        <a href="#" class="btn btn-primary rounded-0">Ver</a>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 pb-3 mt-5">
                <div class="card card-custom bg-white border-white border-0 rounded-0">
                    <div class="card-custom-img bg-gradient-primary-to-secondary"></div>
                    <div class="card-custom-avatar">
                        <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar"/>
                    </div>
                    <div class="card-body" style="overflow-y: auto">
                        <h4 class="card-title">Nome do Animal</h4>
                        <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Id ullam doloribus, autem harum, aperiam distinctio quae consequatur sit
                            consequuntur iste necessitatibus ipsa asperiores facilis quisquam rem maiores. Illum, nisi
                            sequi.
                        </p>
                    </div>
                    <div class="card-footer text-center" style="background: inherit; border-color: inherit;">
                        <a href="#" class="btn btn-primary rounded-0">Ver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection