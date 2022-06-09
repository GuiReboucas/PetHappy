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
                        <h6 class="text-dark"><i class="fa-solid fa-book-open"></i> Nossa História</h6>
                        <p class="historia text-justify bg-light p-1 rounded-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit similique vitae aperiam. Deserunt dolor magni eveniet vero praesentium possimus, amet necessitatibus alias sapiente quis totam natus explicabo animi est eos?
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat odio laborum pariatur error nam recusandae? Unde ipsam vero amet, impedit commodi rem perferendis! Soluta at hic aut ratione inventore ut! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat odio laborum pariatur error nam recusandae? Unde ipsam vero amet, impedit commodi rem perferendis! Soluta at hic aut ratione inventore ut!
                        </p>
                    </div>
                </div>
                <div class="card logo">
                    <h4 class="p-2 text-dark mt-4"><i class="fa-solid fa-people-group"></i> Nossa Equipe</h4>
                    <div class="slide">
                        <div id="carouselExampleSlidesOnly" class="fotoEquipe carousel slide carousel-fade" data-bs-ride="carousel" style="width: 300px; height: 200px">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="img/abrigo/elon-musk.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-flex d-md-block">
                                        <p class="text-light bg-primary badge bg-primary text-wrap">Guigas Musk<br>Diretor</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/abrigo/bill-gates.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-flex d-md-block">
                                        <p class="text-light bg-primary badge bg-primary text-wrap">Daniel Gates<br>Zelador</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/abrigo/STEVE-JOBS.pNg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-flex d-md-block">
                                        <p class="text-light bg-primary badge bg-primary text-wrap">Silvio Jobs<br>Veterinário</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/abrigo/larry-Page.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-flex d-md-block">
                                        <p class="text-light bg-primary badge bg-primary text-wrap">Thiago Page<br>Gerente</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/abrigo/mark-zuckerber.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-flex d-md-block">
                                        <p class="text-light bg-primary badge bg-primary ms-2">Felps Zuckerber<br>Cuidador</p>
                                        <!-- <p class="text-light bg-primary badge bg-primary ms-2">Cuidador</p> -->
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/abrigo/bezos.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-flex d-md-block">
                                        <p class="text-light bg-primary badge bg-primary text-wrap">Lucas Bezos<br>Assistente</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <div>
                        <h6 class="text-center text-dark"><i class="fa-solid fa-map-location-dot"></i> Localização</h6>
                        <div class="local">
                            <iframe class="mapa border shadow-sm p-1 bg-body rounded rounded-3 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.4316346625205!2d-38.95097168561534!3d-12.219026748454738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7143903dbbf1785%3A0x7843ea34be97c354!2sPatinhas%20Pet%20Hostel!5e0!3m2!1spt-BR!2sbr!4v1652742476067!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title text-center text-dark">Horário de Funcionamento</h6>
                        <div class="horario bg-light mx-auto">
                            <div class="slide">
                                <div id="carouselExampleSlidesOnly" class="horaFunc carousel slide w-100 mx-auto" data-bs-ride="carousel" data-interval="500">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="2000">
                                            <p class="card-text text-center">Segunda a Sexta-Feira: de 8 às 17h</p>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <p class="card-text text-center">Sábado: de 8 às 12h</p>
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
            <h3 class="text-center mt-4 mb-4"><i class="fa-solid fa-person-digging"></i> Nossos Trabalhos</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="sectionCarrosel">
                        <div id="carouselExampleControl" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="banner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="../img/abrigo/evento/vacinacao.webp" id="imgBanner" class="d-block w-100 me-0" alt="Vacinação">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/evento/vacinacao1.webp" id="imgBanner" class="d-block w-100 me-0" alt="Vacinação">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/evento/vacinacao2.jpeg" id="imgBanner" class="d-block w-100 me-0" alt="Vacinação">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/evento/vacinacao4.jpg" id="imgBanner" class="d-block w-100 me-0" alt="Vacinação">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-7">
                    <h4 class="text-center">Vacinação Solidária</h4>
                    <p class="text-center">Nosso evento de vacinação solidária contou com a participação da equipe do abrigo Patinhas Pet Hotel, da clínica parceira VetMed e de nossa comunidade de voluntários AmoPet. A vacina ocorrida no último fim de semana foi um sucesso, abrangendo um grupo de 320 animais, com 164 cães e 156 felinos.
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
                            <div class="carousel-inner" id="banner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao1.jpeg" id="imgBanner" class="d-block w-100 ms-0" alt="Quem Somos">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao2.jpg" id="imgBanner" class="d-block w-100 ms-0" alt="Agência">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao3.jpg" id="imgBanner" class="d-block w-100 ms-0" alt="Marketing">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao4.jpg" id="imgBanner" class="d-block w-100 ms-0" alt="Contato">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="sectionCarrosel">
                        <div id="carouselExampleControl" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="banner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao1.jpeg" id="imgBanner" class="d-block w-100 me-0" alt="Quem Somos">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao2.jpg" id="imgBanner" class="d-block w-100 me-0" alt="Agência">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao3.jpg" id="imgBanner" class="d-block w-100 me-0" alt="Marketing">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao4.jpg" id="imgBanner" class="d-block w-100 me-0" alt="Contato">
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
                            <div class="carousel-inner" id="banner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao1.jpeg" id="imgBanner" class="d-block w-100 ms-0" alt="Quem Somos">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao2.jpg" id="imgBanner" class="d-block w-100 ms-0" alt="Agência">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao3.jpg" id="imgBanner" class="d-block w-100 ms-0" alt="Marketing">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/abrigo/atuacao/atuacao4.jpg" id="imgBanner" class="d-block w-100 ms-0" alt="Contato">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div><br>
        </div>
    </section>
    <!-- Meio - Apoio -->
    <section>
        <div class="container-fluid trabalhos border border-1 w-75 mb-4">
            <h3 class="text-center mt-4 mb-4"><i class="fa-solid fa-handshake-angle"></i> Apoie nosso trabalho</h3>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur laudantium magnam iste illo. Assumenda iste autem rerum sapiente labore modi cupiditate, laboriosam corporis explicabo! Modi aut error id at voluptas.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error ratione dolorem quis! Aspernatur, et consequuntur reiciendis dolorum assumenda beatae? Adipisci repellat libero, cupiditate odit illo corporis velit debitis dolorum facere?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique repellat dolorem ullam laboriosam error nostrum recusandae autem dolores provident, possimus officiis corporis est placeat ut, optio debitis reprehenderit, doloremque exercitationem!
                    </p>
                </div>
                <hr>
            </div><br>
            <div class="row">
                <div class="col-md-5">
                    <h4>Como Ajudar</h4>
                    <p class="text-start">
                        <hr>
                        <strong>PIX:(75)9999-9999</strong><br><br>
                        <strong>Transferência bancária:</strong><br>
                        Banco do Brasil<br>
                        Agência: 1313-13<br>
                        Conta: 13013-0<br>
                        CNPJ:01.001.100-0001-01<br>
                    </p>
                    <i class="fa-solid fa-people-line"></i>
                    <a href="#">Clique aqui e veja outras formas de ajudar</a>
                </div>
                <div class="col-md-6">
                    <p><i class="fa-solid fa-location-dot"></i> Demais doações devem ser entregues em nosso abrigo.</p>
                    <div class="ajuda">
                        <div class="local">
                            <iframe class="mapa2 border shadow-sm p-1 bg-body rounded rounded-3 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.4316346625205!2d-38.95097168561534!3d-12.219026748454738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7143903dbbf1785%3A0x7843ea34be97c354!2sPatinhas%20Pet%20Hostel!5e0!3m2!1spt-BR!2sbr!4v1652742476067!5m2!1spt-BR!2sbr" width="600" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div><br>
                        <p>Rua Barra do São Francisco, nº 235 - Mangabeira - Feira de Santana-Ba</p>
                    </div>
                </div>
            </div><br>
        </div>

    </section>
    <!-- Meio - Animais -->
    <section>
        <div class="container-fluid w-75 pets border border-1 mb-3">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Conheça nossos Amiguinhos!</h2>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="card-group">
                                    <div class="card p-2 border-0">
                                        <div class="card-body mx-auto pet-img">
                                            <img src="img/animais/gato1.jpg" class="card-img-top pet-card" alt="...">
                                            <h5 class="card-title">Joaquim</h5>
                                            <p class="card-text">Docil, carinhoso, sapeca e bagunceiro.</p>
                                            <p class="card-text"><small class="text-muted">Vira-lata de 3 anos de idade</small></p>
                                        </div>
                                    </div>
                                    <div class="card p-2 mr-1 border-0">
                                        <div class="card-body mx-auto pet-img">
                                            <img src="img/animais/cao1.jpg" class="card-img-top pet-card" alt="...">
                                            <h5 class="card-title">Piranha</h5>
                                            <p class="card-text">Gosta de "ruar", late sempre que quer algo, assanhada com estranhos. Castrada.</p>
                                            <p class="card-text"><small class="text-muted">Vira-lata de 2 anos de idade</small></p>
                                        </div>
                                    </div>
                                    <div class="card p-2 mr-1 border-0">
                                        <div class="card-body mx-auto pet-img">
                                            <img src="img/animais/gato2.jpg" class="card-img-top pet-card" alt="...">
                                            <h5 class="card-title">Folgado</h5>
                                            <p class="card-text">Muito dócil, gosta de ficar escondido, brinca bastante com sua bola de pano.</p>
                                            <p class="card-text"><small class="text-muted">Vira-lata de 4 anos de idade</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="card-group">
                                    <div class="card p-2 mr-1 border-0">
                                        <div class="card-body mx-auto pet-img">
                                            <img src="img/animais/cao2.jpg" class="card-img-top pet-card" alt="...">
                                            <h5 class="card-title">Godofredo</h5>
                                            <p class="card-text">Brincalhão, bagunceiro,late pouco. Adora correr atrás de carro.</p>
                                            <p class="card-text"><small class="text-muted">Vira-lata de 2 anos de idade</small></p>
                                        </div>
                                    </div>
                                    <div class="card p-2 mr-1 border-0">
                                        <div class="card-body mx-auto pet-img">
                                            <img src="img/animais/gato3.jpg" class="card-img-top pet-card" alt="...">
                                            <h5 class="card-title">Emanuelle</h5>
                                            <p class="card-text">Sempre emburrada, não é de muito carinho, mas tá sempre por perto. Fica na dela e não causa muita confusão. Não castrada.</p>
                                            <p class="card-text"><small class="text-muted">Siamesa de 9 meses</small></p>
                                        </div>
                                    </div>
                                    <div class="card p-2 mr-1 border-0">
                                        <div class="card-body pet-img mx-auto">
                                            <img src="img/animais/gato4.jpg" class="card-img-top pet-card" alt="...">
                                            <h5 class="card-title">Carrasco</h5>
                                            <p class="card-text">Adora cotucar os demais gatos, não tem medo de cachorro. Vive correndo e subindo em locais altos. Muito amigo e dócil com os tutores.</p>
                                            <p class="card-text"><small class="text-muted">Vira-lata de 1 ano de idade</small></p>
                                        </div>
                                    </div>
                                </div>
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
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection