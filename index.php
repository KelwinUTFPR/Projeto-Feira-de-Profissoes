<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Home</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css"> 
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css"> 
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo logo-small">
                     <a href="index.php">INOVE <br /><strong>EMPREENDA</strong></a>
                  </div>                  
                  <p class="nav-text">MENU</p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="emp.php">O que é?</a>
                        </li>
                        <li><a href="cursos.php">Cursos</a>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="index.php">INOVE <br /><strong>EMPREENDA</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="uni.php">Universidades</a>
                        </li>
                        <li><a href="startup.php">O que é start-up?</a>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <section>
         <!-- CAROUSEL -->  	
         <div id="carousel">
	
            <div id="header-carousel" class="owl-carousel owl-theme">
               <div class="item">
			   <?php $query = mysqli_query($conexao, "SELECT * FROM slider INNER JOIN slider_texto ON sliderImagem_Codigo = sliderImagem_slider_Codigo WHERE sliderImagem_Codigo=1");
					                     while($exibir = mysqli_fetch_array($query)){ ?>
                  <img src="img/<?php echo $exibir["SliderImagem_Nome"]; ?>" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2> <?php echo $exibir["slider_corpo"];  ?></h2>
                        </div>
                        <div class="s-12 l-9">
                           <p> Torne-se um empreendedor de sucesso.
                           </p>
                        </div>
                     </div>
                  </div>
				     <?php } ?>
               </div>
               <div class="item">
			    <?php $query = mysqli_query($conexao, "SELECT * FROM slider INNER JOIN slider_texto ON sliderImagem_Codigo = sliderImagem_slider_Codigo WHERE sliderImagem_Codigo=2");
					                     while($exibir = mysqli_fetch_array($query)){ ?>
                  <img src="img/<?php echo $exibir["SliderImagem_Nome"]; ?>" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2> <?php echo $exibir["slider_corpo"];  ?></h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>Que cursos posso fazer para seguir nessa área?
                           </p>
                        </div>
                     </div>
                  </div>
				     <?php } ?>
               </div>
               <div class="item">
			    <?php $query = mysqli_query($conexao, "SELECT * FROM slider INNER JOIN slider_texto ON sliderImagem_Codigo = sliderImagem_slider_Codigo WHERE sliderImagem_Codigo=3");
					                     while($exibir = mysqli_fetch_array($query)){ ?>
                  <img src="img/<?php echo $exibir["SliderImagem_Nome"];?>" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2> <?php echo $exibir["slider_corpo"];  ?></h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>Como começar o seu negócio.
                           </p>
                        </div>
                     </div>
                  </div>
				     <?php } ?>
               </div>
			
            </div>										 
         </div>
         <!-- FIRST BLOCK --> 	
         <div id="first-block">
            <div class="line">
               <h2>Conheça o empreendedorismo</h2>
               <p class="subtitile">Aprenda mais sobre o trabalho e a rotina de um empreendedor e descubra se você tem o perfil para se tornar um bom profissional da área.
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <a href="perfil.php"><i class="icon-sli-people icon2x"></i></a>
                     <h3>PERFIL</h3>
                     <p>Descubra se você tem o perfil certo para se tornar um bom empreendedor.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <a href="cursos.php"><i class="icon-sli-graduation icon2x"></i></a>
                     <h3>Cursos</h3>
                     <p>Descubra os cursos que você pode fazer para auxiliar na sua carreira como empreendedor.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <a href="areas.php"><i class="icon-sli-layers icon2x"></i></a>
                     <h3>Áreas de atuação</h3>
                     <p>Conhecer as áreas para se empreender com mais segurança é a melhor maneira de entrar com o pé direito na sua vida de empresário.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                       <a href="fablab.php"><i class="icon-sli-puzzle icon2x"></i></a>
                     <h3>Fab Labs</h3>
                     <p>Conheça mais sobre FabLabs onde você pode por seus planos em prática e realizar seus projetos.</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- SECOND BLOCK --> 	
         <div id="second-block">
            <div class="line">
               <div class="margin-bottom">
                  <div class="margin">
                     <article class="s-12 l-8 center">
                        <h1>Mas o que é Empreendedorismo?</h1>
                        <p class="margin-bottom">Conheça conceitos básicos do empreendedorismo por meio das visões de diversos autores que destacam características importantes do empreendedor.
                        </p>
                        <a class="button rounded-btn submit-btn s-12 l-4 center" href="emp.php">Leia mais</a>  			
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <!-- GALLERY --> 	
         <div id="third-block">
            <div class="line">
               <h2>Notícias</h2>
               <p class="subtitile">Veja as principais notícias do atual mundo do empreendedorismo
               </p>
               <div class="margin">
			   <?php $query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN blogimagem ON Blog_Codigo = BlogImagem_Blog_Codigo ORDER BY Blog_Codigo ASC LIMIT 4");
					                     while($exibir = mysqli_fetch_array($query)){ ?>    
                  <div class="s-12 m-6 l-3">
				  <a href="<?php echo $exibir["Blog_Link"];?>"><img src="img/<?php echo $exibir["BlogImagem_Nome"]; ?>" alt="alternative text"></a>
				  
                     <p class="subtitile"> <?php echo $exibir["Blog_Corpo"];  ?>
                  </div>
					 
                  
										 <?php } ?>
               </div>
            </div>
         </div>
         <div id="fourth-block">
            <div class="line">
               <div id="news-carousel" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2>DICAS</h2>
                     <p class="s-12 m-12 l-8 center">Tenha meta e siga um método. Quando uma pessoa tem os dois, ela rompe barreiras.
                     </p>
                  </div>
                  <div class="item">
                     <h2>DICAS</h2>
                     <p class="s-12 m-12 l-8 center">Seja inteligente, saiba usar o seu pensamento a seu favor. Seus pensamentos determinam a sua freqüência e seus sentimentos lhe dizem imediatamente em que freqüência você está. Quando se sente mal, você está na freqüência que atrai coisas ruins, prejudicando o alcance de suas metas.
                     </p>
                  </div>
                  <div class="item">
                     <h2>DICAS</h2>
                     <p class="s-12 m-12 l-8 center">Tenha fé, mas não deixe de agir para modificar a realidade. Vá do pensamento à ação.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
			<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://www.facebook.com/Empreendedorismo-2505578319457285/?modal=admin_todo_tour" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

			
               <p><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="https://www.facebook.com/Empreendedorismo-2505578319457285/?modal=admin_todo_tour" data-numposts="5"></div>
               </p>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                  <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a>
               </p>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="js/responsee.js"></script> 
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
            var owl = $('#header-carousel');
            owl.owlCarousel({
              nav: true,
              dots: false,
              items: 1,
              loop: true,
              navText: ["&#xf007","&#xf006"],
              autoplay: true,
              autoplayTimeout: 4000
           });
           var owl = $('#news-carousel');
           owl.owlCarousel({
              nav: true,
              dots: false,
              items: 1,
              loop: true,
              navText: ["&#xf007","&#xf006"],
              autoplay: true,
              autoplayTimeout: 4000
           });
         });	
          
      </script> 
   </body>
</html>