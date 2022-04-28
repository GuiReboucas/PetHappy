<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <link rel="stylesheet" href="boxicons.min.css">

    <link rel="stylesheet" type="text/css" href="./css/style.css">
     
    <script>
        // Config
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'bgcinza': '#C4C4C4',
                    },
                    fontFamily: {
                        'logomarca': ['"Pacifico"', 'cursive'],
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        /* Custom CSS  */
        
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }
        </style>
    <!-- Fonts -->
    <style>
        /* Pacifico */
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container-fluid">
              <!-- Toggle button -->
              <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarCenteredExample"
                aria-controls="navbarCenteredExample"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <i class="fas fa-bars"></i>
              </button>
          
              <!-- logo -->
              <div class="logo">

                <img src="../img/Pet Happy Logo 1.svg" class="w-16 inline-block mr-4"> 
                <h1 class="text-3xl font-logomarca text-[#8658d5] inline-block">PetHappy</h1>
              </div>

              <!-- Collapsible wrapper -->
              
              <div
                class="collapse navbar-collapse justify-content-left"
                id="navbarCenteredExample"
              >
              
              
                <!-- Left links -->
                <ul class="navbar-nav mb-2 mb-lg-0 menu">
                  <li class="nav-item">
                    <a class="nav-link " href="#">Pagina Inicial</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">Sobre</a>
                  </li>                  
                  <li class="nav-item">
                    <a class="nav-link " href="#">Instituições</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link " href="#">Ajudar</a>
                  </li> 

                </ul>
                <!-- Left links -->
              </div>
              <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
          </nav>
   
          @yield('content')
   
    
    
   
    <footer class="bg-light text-center text-lg-start">
            <!-- Grid container -->
            <div class="container p-5 ty">
              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5 class="text-uppercase rt">Pet Happy</h5>
          
                  <ul class="list-unstyled mb-0 iconesFooterPetHappy">
                    <li>
                      <h1>Entre em contato</h1>
                    </li>
                    <li class="fl">
                      <img src="./img/chamada-telefonica.png">
                      <p>(75) 9 9999-9999</p>
                    </li>
                    <li>
                        <img src="./img/o-email.png">
                      <p>pethappy@gmail.com</p>
                    </li>
                  </ul>
                </div>
                <!--Grid column-->
          
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5 class="text-uppercase mb-0 rt" >Redes Socias</h5>
                  
                  <div class="iconesFooter">
                    
                    <a href="https://pt-br.facebook.com/"><img src="./img/facebook.png"></a>
                    
                    <a href="https://www.instagram.com/"><img src="./img/instagram.png"></a>
                    
                    <a href="https://www.whatsapp.com/"><img src="./img/whatsapp.png"/></a>
                    
                    <a href="https://twitter.com/"><img src="./img/twitter.png" ></a>
                  </div>
                </div>
                <!--Grid column-->
          
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5 class="text-uppercase rt">Colabore</h5>
          
                  <ul class="list-unstyled mb-0 fd">
                    <li>
                      <a href="#!" class="text-dark">Doe Qualquer valor </a>
                    </li>
                    <li>
                      <a href="#!" class="text-dark">Divulgue a PatHappy </a>
                    </li>
                  </ul>
                </div>
                <!--Grid column-->
          
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5 class="text-uppercase mb-0 rt">Suporte</h5>
          
                  <ul class="list-unstyled fd">
                    <li>
                      <a href="#!" class="text-dark">Perguntas Frequentes</a>
                    </li>
                    <li>
                      <a href="#!" class="text-dark">Mapa do site</a>
                    </li>
                    <li>
                      <a href="#!" class="text-dark">Reportar erro</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0 siteBlindado">
                
                    <img src=".\img\siteBlindado.png">
                    
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </div>
            <!-- Grid container -->
            
          
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                Copyright © 2022 Pet Happy. Todos direitos reservados.
              
            </div>
            <!-- Copyright -->
          
    </footer>
</body>
</html>