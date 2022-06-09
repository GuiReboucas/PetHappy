@extends('layouts.app')

@section('title', 'Sobre')

@section('styles') <!-- StyleSheet -->
<link rel="stylesheet" href="./css/sobre.css">
@endsection

@section('content')

<body>
    <div  >
        <img src=".\img\sobre\slogan.jpg" class="img-fluid rounded-start" alt="..." style="max-height: 350px; width:100% ;">
    </div>

    <div class="container-fluid text-center d-flex flex-column align-items-center mb-5" style="height: 200px; width:100%; background-color: #C4C4C4; border-radius: 0px 0px 20px 20px;">
		<h1 class="my-3">Sobre a PetHappy!</h1>
		<p class="text-wrap" style="width: 60%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		Praesent at urna vitae sapien mollis aliquam. Vestibulum ante
		ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus nec odio quis quam rhoncus
		</p>
		
	</div>

    <div class="container-fluid text-center d-flex flex-column align-items-center mb-5" style=" width:95%; background-color: #C4C4C4; border-radius: 0px 0px 20px 20px;">
		<h1 class="my-3">Quem somos</h1>
		<p class="text-wrap" style="width: 60%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		Praesent at urna vitae sapien mollis aliquam. Vestibulum ante
		ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus nec odio quis quam rhoncus
		</p>

        <div class="d-flex align-items-start flex-column pdCard mb-5">
            <div class="" style=;background-color: #C4C4C4">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src=".\img\pagina-inicial\pqAdotarGato.jpg" class="img-fluid rounded-start" alt="..." style="max-height: 140px; width:240px ;">
                    </div>
                    <div class="col-md-6">
                        
                        <h1 class="my-3">Diferencial</h1>
                        <p class="text-wrap" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Praesent at urna vitae sapien mollis aliquam. Vestibulum ante
                            ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus nec odio quis quam rhoncu</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-start flex-column pdCard mb-5">
            <div class="" style=;background-color: #C4C4C4">
                <div class="row g-0">                   
                    <div class="col-md-9">                        
                        <h1 class="pl-6" style="margin-left: auto; margin-right: auto;width: 6em">Como Funciona</h1>
                        <p class="text-wrap"style="margin-left: auto; margin-right: auto;width:60% " >Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Praesent at urna vitae sapien mollis aliquam. Vestibulum ante
                            ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus nec odio quis quam rhoncu</p>
                    </div>
                    <div class="col-md-3">
                        <img src=".\img\pagina-inicial\pqAdotarGato.jpg" class="img-fluid rounded-start" alt="..." style="max-height: 140px; width:240px ;">
                    </div>
                </div>
            </div>
        </div>
	</div>



<section>
    <div class="container-fluid text-center d-flex flex-column align-items-center mb-5" style="height: 450px; width:95%; background-color: #C4C4C4; border-radius: 20px 20px 20px 20px;">
        <div class="titulos">
            <h1>Nossas Conquistas!</h1>
        </div>          
        <div class="slider sliderc">
        <div class="slide-track slide-trackc">
            <div class="slide slidec">
                <img class="img-slide img-slidec" src="..\img\sobre\sobreCronometro.png">
                <span>O site mais rapido</span>
            </div>            
            <div class="slide slidec">
                <img class="img-slide img-slidec" src=".\img\sobre\sobreLike.png">
                <span>Site mais bem Avaliado</span>
            </div>
            <div class="slide slidec">
                <img class="img-slide img-slidec" src=".\img\sobre\sobreTrofeu.png">
                <span>Site numero 1</span>
            </div>
            <div class="slide slidec">
                <img class="img-slide img-slidec" src=".\img\sobre\sobreVerifi.png">
                <span>Site Verificado</span>
            </div>
            <div class="slide slidec">
                <img class="img-slide img-slidec" src=".\img\sobre\sobreGrafic.png">
                <span>Site mais acessado</span>
            </div>
               
            <!-- mais 5 slides -->
    
            <div class="slide slidec">
                <img class="img-slide img-slidec" src="..\img\sobre\sobreCronometro.png">
                <span>O site mais rapido</span>
            </div>
                <div class="slide slidec">
                <img class="img-slide img-slidec" src=".\img\sobre\sobreLike.png">
                <span>Site mais bem Avaliado</span>
            </div>
                <div class="slide slidec">
                <img class="img-slide img-slidec" src=".\img\sobre\sobreTrofeu.png">
                <span>Site numero 1</span>
            </div>
                <div class="slide slidec">
                <img class="img-slide img-slidec" src=".\img\sobre\sobreVerifi.png">
                <span>Site Verificado</span>
            </div>
                <div class="slide slidec">
                <img class="img-slide img-slidec" src=".\img\sobre\sobreGrafic.png">
                <span> Site mais acessado </span>
            </div>             
        </div>
	</div>
</section>

<section>
    
    <body style="background-color: #4286f4;">
        <div class="titulos" style="text-align: center;padding:40px">
            <h1>Depoimentos!</h1>
        </div> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div id="inam" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                             <div class="container">
                                 <div class="row">
                                     <div class="col-sm-12 col-lg-4">
                                         <div class="card" style="width: 300px; height:400px;margin: auto;text-align: center;">
                                             <img src=".\img\sobre\depoimento1.jpg" class="card-img-top" style="width: 300px;height:200px;">
                                             <div class="card-body">
                                                 <h4 class="card-title">Muito transparente</h4>
                                                 <p class="card-text">Hoje fui buscar o novo menbro da minha familia, conheci ele pela plataforma e não conhecia o abrigo, e todas as informações que o site passou estavam em conforme</p>                                                 
                                             </div>                                             
                                         </div>                                         
                                     </div>
                                     <div class="col-sm-12 col-lg-4">
                                         <div class="card" style="width: 300px; height:400px;text-align: center;">
                                             <img src=".\img\sobre\depoimento2.jpg" class="card-img-top" style="width: 300px;height:200px;">
                                             <div class="card-body">
                                                 <h4 class="card-title">Feliz!!!</h4>
                                                 <p class="card-text">Esse é o Ted,já faz parte da familia já tem 1 ano</p>                                                 
                                                 
                                             </div>                                             
                                         </div>                                         
                                     </div>
                                     <div class="col-sm-12 col-lg-4">
                                         <div class="card" style="width: 300px; height:400px;text-align: center;">
                                             <img src=".\img\sobre\demonstracao3.jpg" class="card-img-top" style="width: 300px;height:200px;">
                                             <div class="card-body">
                                                 <h4 class="card-title">Nick e seu novo irmão Jorge</h4>
                                                 <p class="card-text">Conheci a plataforma por uma amiga depois delas terem super recomendado fui pesquisar abrigos proximos </p>
                                             </div>                                             
                                         </div>                                         
                                     </div>                                     
                                 </div>                                 
                             </div>             
                        </div>
                        <div class="carousel-item">
                             <div class="container">
                                 <div class="row">
                                     <div class="col-sm-12 col-lg-4">
                                         <div class="card" style="width: 300px; height:400px;;margin: auto;text-align: center;">
                                             <img src=".\img\sobre\depoimento4.jpg" class="card-img-top"style="width: 300px;height:200px;">
                                             <div class="card-body">
                                                 <h4 class="card-title">Nina e Lari</h4>
                                                 <p class="card-text">As duas adotadas de um abrigo que eu não conhecia até a plataforma me mostrar.</p>                                               
                                             </div>                                             
                                         </div>                                         
                                     </div>
                                     <div class="col-sm-12 col-lg-4">
                                         <div class="card" style="width: 300px;height:400px;text-align: center;">
                                             <img src=".\img\sobre\depoimento5.jpg" class="card-img-top"style="width: 300px;height:200px;">
                                             <div class="card-body">
                                                 <h4 class="card-title">Nosso filho estudando</h4>
                                                 <p class="card-text"> gente adotou o Pedro com 6 meses de idade hoje ele está estudando para PRF comigo</p>                                                 
                                             </div>
                                        </div>                                         
                                     </div>
                                     <div class="col-sm-12 col-lg-4">
                                         <div class="card" style="width: 300px; height:400px;text-align: center;">
                                             <img src=".\img\sobre\depoimento6.jpg" class="card-img-top"style="width: 300px;height:200px;">
                                             <div class="card-body">
                                                 <h4 class="card-title">Obrigado PetHappy</h4>
                                                 <p class="card-text">Sem essa plataforma eu não conseguiria ser um pai de pet que sou hoje.</p>                                                                                                 
                                             </div>                                             
                                         </div>                                         
                                     </div>                                     
                                 </div>                                 
                             </div>                                
                        </div>                        
                    </div>
                    <a href="#inam" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a href="#inam" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>                    
                </div>                
            </div>            
        </div>        
    </div>   
</section>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
      <script src="{{ asset('.\js\sobre.js') }}"></script>
</body>





@endsection