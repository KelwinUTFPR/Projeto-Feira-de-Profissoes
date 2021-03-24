<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Áreas de Atuação </title>
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
               <h1>ÁREAS DE ATUAÇÃO</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
			<h2>Conheça os tipos de empreendedorismo:</h2>
               <p class="fonte s-12 m-12 l-8 center">
<b>Corporativo:</b> o empreendedorismo corporativo se refere a identificação, desenvolvimento e implementação de novas ações e oportunidades em determinados negócios e na estrutura de uma empresa. Ele tem como objetivo provocar a inovação nas atividades da organização e, consequentemente, gerar melhorias nos recursos humanos e na estratégia do negócio.<br><br>
<b>Social:</b> este tipo de empreendedorismo tem como base a promoção de soluções e mudanças nos problemas da sociedade por meio de uma ideia, gerando desenvolvimento, qualidade de vida, cultura, melhorias ambientais e aprimoramento da economia para as pessoas. Trata-se de uma ação focada na cooperação mútua e não na competitividade.<br><br>
<b>Individual:</b> o empreendedorismo individual tem como característica a criação de novas empresas e negócios. Em outras palavras, são as organizações em fase inicial.
			   
               </p>
               <h2>Quais são as áreas de negócio lucrativas?</h2>
               <p class="fonte s-12 m-12 l-8 center">
<b>Setor Alimentício:</b> Dentre as principais tendências do setor de alimentação estão opções de comida rápida saudável, sistema de delivery, padarias com café agregado e sorveterias estilo buffet.<br><br>

<b>Setor de Cuidados de Beleza e Pessoais:</b>  Os pontos que aparecem mais fortes nesse segmento são técnicas de emagrecimento, cuidados de beleza masculinos e depilação.<br><br>
 
<b>Setor de Tecnologia:</b> Os profissionais do setor de tecnologia podem se tornar empreendedores de sucesso apostando no desenvolvimento de interfaces personalizadas para empresas.<br><br>

<b>Setor de Serviços – Reparos de Eletrônicos:</b> Está em alta no mercado o segmento de conserto de smartphones, tablets e computadores.<br><br>

<b>Setor de Serviços – Coworking:</b> Quem tem imóveis parados pode pensar em transformá-los em opção para coworking, o que representa uma oportunidade de empreendimento de olho nas tendências futuras.


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