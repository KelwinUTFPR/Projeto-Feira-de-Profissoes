<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Perfil Empreendedor</title>
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
               <h1>Perfil</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
               <p class="fonte s-12 m-12 l-8 center">Ao contrário do que muitos pensam, um empreendedor não precisa, necessariamente, ser um empresário. Para esclarecermos esta confusão difundida por muitas pessoas no mundo corporativo, e definir o que é ser empreendedor realmente, precisamos estabelecer as diferenças essenciais entre ele e um empresário tradicional.
			   
               </p>
               <h2>Quais são as características de um empreendedor?</h2>
               <p class="fonte s-12 m-12 l-8 center">
<b>Otimismo:</b>  não confunda otimista com sonhador. O otimista sempre espera o melhor e acredita que tudo vai dar certo no final, mas faz de tudo para chegar aos seus objetivos. Isso inclui, claro, mudanças em seu negócio. Já o sonhador não enxerga riscos, e mesmo que seu negócio esteja falindo, continua fazendo a mesma coisa por acreditar cegamente que basta sonhar para realizar.<br><br>

<b>Autoconfiança:</b>  acreditar em si mesmo é fundamental para valorizar seus próprios talentos e defender suas opiniões. Assim, esse tipo de empreendedor costuma arriscar mais.<br><br>

<b>Coragem:</b>  sem temer fracasso e rejeição, um empreendedor faz tudo o que for necessário para ser bem sucedido. Essa característica não impede que sejam cautelosos e precavidos contra o risco, mas os faz entender a possibilidade de falhar.<br><br>

<b>Persistência e resiliência:</b> motivado, convicto e entusiasmado, um bom empreendedor pode resistir a todos os obstáculos até que as coisas finalmente entrem nos eixos. Ele não desiste facilmente, supera desafios e segue até o fim, sempre perseverante.<br><br>
Se alguém perguntar agora o que é empreendedorismo você seria capaz de responder com suas próprias palavras? Você se considera um empreendedor? 


               </p>
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