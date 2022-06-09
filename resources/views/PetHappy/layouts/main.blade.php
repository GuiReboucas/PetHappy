<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Abrigo</title>
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--CSS-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./css/main.css">

  <!--Scripts jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <!-- Bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Icons-->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  <!--Progress Bar-->
  <script src="./js/progressbar.min.js"></script>
  <!--Paralax-->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

</head>
<body>
  <!-- Menu-->
  <header>
    <div class="container-fluid " id="nav-container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a href="#" class="navbar-brand">
            <img id="logo" src="../img/Pet Happy Logo 1.svg" alt="Logo PetHappy">PetHappy
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="toggle Navgation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbar-links">
            <div class="navbar-nav">
              <a href="#" class="nav-item nav-link active" id="home-menu">Pagina Inicial</a>
              <a href="#" class="nav-item nav-link" id="on-menu">Sobre</a>
              <a href="#" class="nav-item nav-link" id="institutions-menu">Instituições</a>
              <a href="#" class="nav-item nav-link" id="help-menu">Ajudar</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- Repetidor da main nas outras paginas(section)-->

  @yield('content')


<!-- Rodapé-->
<footer class="bg-light text-center text-lg-start ">
  <div class="container-fluid colorFooter p-3">
    <div class="row">
      <!--Pet Happy-->
      <div class="col-lg-2  mb-4 mb-md-0">
        <h5 class="text-uppercase rt">Entre em contato</h5>
        <ul class="list-unstyled mb-0 iconesFooterPetHappy">
          <li><p><img src="./img/chamada-telefonica.png" style="height: 35px">(75) 9 9999-9999</p></li>
          <li><p><img src="./img/o-email.png" style="height: 35px">pethappy@gmail.com</p></li>
        </ul>
      </div>

      <!--Redes Socias-->
      <div class="col-lg-2  mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0 rt" >Redes Socias</h5>
        <div class="iconesFooter">
          <a href="https://pt-br.facebook.com/"><img src="./img/facebook.png" style="height: 35px"></a>
          <a href="https://www.instagram.com/"><img src="./img/instagram.png" style="height: 35px"></a>
          <a href="https://www.whatsapp.com/"><img src="./img/whatsapp.png" style="height: 35px"/></a>
          <a href="https://twitter.com/"><img src="./img/twitter.png" style="height: 35px"></a>
        </div>
      </div>

      <!--Colabore-->
      <div class="col-lg-2  mb-4 mb-md-0">
        <h5 class="text-uppercase rt">Colabore</h5>
        <ul class="list-unstyled mb-0 fd">
          <li><a href="#!" class="text-dark">Doe Qualquer valor </a></li>
          <li><a href="#!" class="text-dark">Divulgue a PatHappy </a></li>
        </ul>
      </div>

      <!--Suporte -->
      <div class="col-lg-2  mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0 rt">Suporte</h5>
        <ul class="list-unstyled fd">
          <li><a href="#!" class="text-dark">Perguntas Frequentes</a></li>
          <li><a href="#!" class="text-dark">Mapa do site</a></li>
          <li><a href="#!" class="text-dark">Reportar erro</a></li>
        </ul>
      </div>

      <!--Site Blindado-->
      <div class="col-lg-2  mb-4 mb-md-0">
        <img class="selo" src=".\img\siteBlindado.png" style="height: 35px">
        <img class="selo" src=".\img\selo_ebit.png" style="height: 35px">
      </div>
      <div class="col-lg-2  mb-4 mb-md-0">
        <img class="selo" src=".\img\selo-ra.png" style="height: 35px">
        <img class="selo" src=".\img\selo-google-site-seguro.png" style="height: 35px">
      </div>

      <!-- Copyright -->

    </div>

  </div>

  <div class="text-center p-3 colorFooter" >
    Copyright © 2022 Pet Happy. Todos direitos reservados.
  </div>

</footer>


  <script src=".js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
