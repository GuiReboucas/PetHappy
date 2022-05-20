@extends('PetHappy.layouts.main')


@section('content')

<body>
    <!-- Inicio - Equipe/História/Localização -->
    <section>
        <div class="container abrigo w-75">
            <div class="card-group">
                <div class="card logo">
                    <img class="card-img" src="img/abrigo/logo.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold text-dark">Patinhas Pet Hostel</h5><br>
                        <h6 class="text-dark">Nossa História</h6>
                        <p class="historia text-justify bg-light p-1 rounded-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit similique vitae aperiam. Deserunt dolor magni eveniet vero praesentium possimus, amet necessitatibus alias sapiente quis totam natus explicabo animi est eos?
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat odio laborum pariatur error nam recusandae? Unde ipsam vero amet, impedit commodi rem perferendis! Soluta at hic aut ratione inventore ut! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat odio laborum pariatur error nam recusandae? Unde ipsam vero amet, impedit commodi rem perferendis! Soluta at hic aut ratione inventore ut!
                        </p>
                    </div>
                </div>
                <div class="card equipe">
                    <h4 class="p-2 text-dark mt-4">Nossa Equipe</h4>
                    <!-- <div id="carouselExampleControl" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao1.jpeg" id="imgBanner" class="d-block w-75 me-0" alt="Quem Somos">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao2.jpg" id="imgBanner" class="d-block w-75 me-0" alt="Agência">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao3.jpg" id="imgBanner" class="d-block w-75 me-0" alt="Marketing">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao4.jpg" id="imgBanner" class="d-block w-75 me-0" alt="Contato">
                                </div>
                            </div>
                        </div> -->
                    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="imgpessoa rounded" src="img/abrigo/rosto1.png" class="d-block" alt="...">
                                <div class="carousel-caption d-flex d-md-block">
                                    <p class="text-light bg-primary badge bg-primary text-wrap">Maria Silva</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="imgpessoa rounded" src="img/abrigo/rosto2.png" class="d-block" alt="...">
                                <div class="carousel-caption d-flex d-md-block">
                                    <p class="text-light bg-primary badge bg-primary text-wrap">Tereza Batista</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="imgpessoa rounded" src="img/abrigo/rosto3.jpg" class="d-block" alt="...">
                                <div class="carousel-caption d-flex d-md-block">
                                    <p class=" caption text-light bg-primary badge bg-primary text-wrap">João Santos</p>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div><br>
                    <div>
                        <h6 class="text-center text-dark">Localização</h6>
                        <iframe class="mapa border shadow-sm p-1 bg-body rounded rounded-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.4316346625205!2d-38.95097168561534!3d-12.219026748454738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7143903dbbf1785%3A0x7843ea34be97c354!2sPatinhas%20Pet%20Hostel!5e0!3m2!1spt-BR!2sbr!4v1652742476067!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title text-center text-dark">Horário de Funcionamento</h6>
                        <div class="horario bg-light border border-0 w-75 mx-auto">
                            <div class="slide">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-interval="500">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="2000">
                                            <p class="card-text text-center">Segunda a Sexta-Feira: de 8 às 17h</p>
                                            <!-- <img src="..." class="d-block w-100" alt="..."> -->
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <p class="card-text text-center">Sábado: de 8 às 12h</p>
                                            <!-- <img src="..." class="d-block w-100" alt="..."> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Meio - Nossos trabalhos -->
    <section>
        <div class="container-fluid trabalhos border border-1 w-75 mb-4">
            <h3 class="text-center mt-4 mb-4">Nossos Trabalhos</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="sectionCarrosel">
                        <div id="carouselExampleControl" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao1.jpeg" id="imgBanner" class="d-block w-75 me-0" alt="Quem Somos">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao2.jpg" id="imgBanner" class="d-block w-75 me-0" alt="Agência">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao3.jpg" id="imgBanner" class="d-block w-75 me-0" alt="Marketing">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao4.jpg" id="imgBanner" class="d-block w-75 me-0" alt="Contato">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-7">
                    <h4 class="text-center">Evento 1</h4>
                    <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur laudantium magnam iste illo. Assumenda iste autem rerum sapiente labore modi cupiditate, laboriosam corporis explicabo! Modi aut error id at voluptas.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error ratione dolorem quis! Aspernatur, et consequuntur reiciendis dolorum assumenda beatae? Adipisci repellat libero, cupiditate odit illo corporis velit debitis dolorum facere?
                    </p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-7 ms-5">
                    <h4 class="text-center">Evento 2</h4>
                    <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur laudantium magnam iste illo. Assumenda iste autem rerum sapiente labore modi cupiditate, laboriosam corporis explicabo! Modi aut error id at voluptas.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error ratione dolorem quis! Aspernatur, et consequuntur reiciendis dolorum assumenda beatae? Adipisci repellat libero, cupiditate odit illo corporis velit debitis dolorum facere?
                    </p>

                </div>
                <div class="col-md-4">
                    <div class="sectionCarrosel">
                        <div id="carouselExampleControl" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao1.jpeg" id="imgBanner" class="d-block w-75 ms-0" alt="Quem Somos">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao2.jpg" id="imgBanner" class="d-block w-75 ms-0" alt="Agência">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao3.jpg" id="imgBanner" class="d-block w-75 ms-0" alt="Marketing">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao4.jpg" id="imgBanner" class="d-block w-75 ms-0" alt="Contato">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="sectionCarrosel">
                        <div id="carouselExampleControl" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao1.jpeg" id="imgBanner" class="d-block w-75 me-0" alt="Quem Somos">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao2.jpg" id="imgBanner" class="d-block w-75 me-0" alt="Agência">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao3.jpg" id="imgBanner" class="d-block w-75 me-0" alt="Marketing">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao4.jpg" id="imgBanner" class="d-block w-75 me-0" alt="Contato">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-7">
                    <h4 class="text-center">Evento 3</h4>
                    <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur laudantium magnam iste illo. Assumenda iste autem rerum sapiente labore modi cupiditate, laboriosam corporis explicabo! Modi aut error id at voluptas.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error ratione dolorem quis! Aspernatur, et consequuntur reiciendis dolorum assumenda beatae? Adipisci repellat libero, cupiditate odit illo corporis velit debitis dolorum facere?
                    </p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-7 ms-5">
                    <h4 class="text-center">Evento 4</h4>
                    <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur laudantium magnam iste illo. Assumenda iste autem rerum sapiente labore modi cupiditate, laboriosam corporis explicabo! Modi aut error id at voluptas.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error ratione dolorem quis! Aspernatur, et consequuntur reiciendis dolorum assumenda beatae? Adipisci repellat libero, cupiditate odit illo corporis velit debitis dolorum facere?
                    </p>

                </div>
                <div class="col-md-4">
                    <div class="sectionCarrosel">
                        <div id="carouselExampleControl" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao1.jpeg" id="imgBanner" class="d-block w-75 ms-0" alt="Quem Somos">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao2.jpg" id="imgBanner" class="d-block w-75 ms-0" alt="Agência">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao3.jpg" id="imgBanner" class="d-block w-75 ms-0" alt="Marketing">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao4.jpg" id="imgBanner" class="d-block w-75 ms-0" alt="Contato">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div><br>
        </div>
    </section>
    <!-- Meio - Nossos pets -->
    <section>

    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection
