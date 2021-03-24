<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Cursos</title>
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
         <div id="head">
            <div class="line">
               <h1>Cursos</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
               <div class="margin">
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="icon-settings icon2x"></i>
                        <h3>Administração</h3>
                        <p>Entre os cursos que podem auxiliar sua carreira de empreendedor, administração é o mais óbvio e completo deles. Clique <a href="adm.php">aqui</a> caso queira saber mais sobre esse curso.
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="icon-display_screen icon2x"></i>
                        <h3>Gestão Empresarial</h3>
                        <p>Aprenda tudo sobre o funcionamento de uma empresa para assim poder iniciar o seu próprio negócio. Clique <a href="gemp.php">aqui</a> para saber mais sobre este curso.
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="icon-math icon2x"></i>
                        <h3>Ciências Econômicas</h3>
                        <p>Entenda como funciona o sistema ecônomico atual do país, ou até do mundo, e faça sua empresa deslanchar. Clique <a href="economia.php">aqui</a> para saber mais.
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="icon-attachment icon2x"></i>
                        <h3>Empreendedorismo</h3>
                        <p>Sim! Também existem cursos de empreendedorismo propriamente ditos. Clique <a href="cursoemp.php">aqui</a> para saber mais sobre essa maravilha e as faculdades que à oferecem.
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="icon-reorder icon2x"></i>
                        <h3>Coaching</h3>
                        <p>Para aqueles que acreditam que antes de gerenciar empresas é peciso aprender a gerenciar a si mesmo. Clique <a href="coach.php">aqui</a> para saber mais sobre os cursos de coaching.
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="icon-mail icon2x"></i>
                        <h3>Marketing</h3>
                        <p>Publicidade é crucial para qualquer negócio e também para um bom empreendedor. Clique <a href="mark.php">aqui</a> caso queira aprender mais sobre como vender seus produtos.
                        </p>
                     </div>
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