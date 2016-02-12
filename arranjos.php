<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <!-- //Head Base// -->
    <?php include ("includes/head.php"); ?>

    <!-- //Flexslider// -->
    <link href="css/flexslider.css" rel="stylesheet">

  </head>
  <body>

    
    <!-- //Configuração de Envio - Formulário de Contato// -->
    <?php include ("includes/mailConfig.php"); ?>

    <!-- //Header - Navbar// -->
    <?php include ("includes/header.php"); ?>

    <!-- //Banner Principal// -->
    <section class="mainBanner arranjos">
      <div class="container">
        <div class="callToAction">
          <h1>Arranjos</h1>
          <h2>Combinações personalizadas para você</h2>
          <a class="btn btn-default" href="#anchorContent">Conheça os modelos</a>
        </div><!--callToAction-->
      </div><!--container-->
    </section>

    <!-- //Separador de Seção// -->
    <div class="styledBorder"></div>

    <!-- //Terrários Abertos// -->
    <section class="secDefault secHalf arranjos">   
      <span class="anchor" id="anchorContent"></span>     
        
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-6 col-sm-12">

            <article class="boxTexto">
              <h2>O arranjo dos seus sonhos</h2>
              <p>Tralálála´la´la laslasdlasd alsdl asdsadlfas asdf asld flasdkjfsldkf jsjkhsl kjdhfskjh fkjshkjfhsldkfh slk dfh askh fkasd klskh k sf.</p>
              <p>Tralálála´la´la laslasdlasd alsdl asdsadlfas asdf asld flasdkjfsldkf jsjkhsl kjdhfskjh fkjshkjfhsldkfh slk dfh askh fkasd klskh k sf.</p>
            </article>
          
          </div><!--col-->
        </div><!--row-->
      </div><!--container-->
    </section>

    <!-- //Separador de Seção// -->
    <div class="styledBorder"></div>

    <!-- //Portfolio// -->
    <section class="secPortfolio">
      <div class="container">

        <h1>Nosso catálogo</h1>

        <!-- //Filtros// -->
        <div class="controls mixControls">          
          <button class="filter btn btn-default" data-filter="all">Todos</button>
          <button class="filter btn btn-default" data-filter=".mixAbertos">Abertos</button>
          <button class="filter btn btn-default" data-filter=".mixFechados">Fechados</button>
        </div>

        <!-- //Galeria// -->
        <div id="mixitup" class="mixitup">
          
          <a class="mix mixAbertos fancybox" href="img/portfolio/terrario01.jpg" rel="portfolio" title="Terrário aberto">
            <img src="img/portfolio/terrario01.jpg" class="img-responsive">
            <p class="referencia">ABE01</p>
          </a>

          <a class="mix mixAbertos fancybox" href="img/portfolio/terrario01.jpg" rel="portfolio" title="Terrário aberto">
            <img src="img/portfolio/terrario01.jpg" class="img-responsive">
            <p class="referencia">ABE02</p>
          </a>

          <a class="mix mixAbertos fancybox" href="img/portfolio/terrario01.jpg" rel="portfolio" title="Terrário aberto">
            <img src="img/portfolio/terrario01.jpg" class="img-responsive">
            <p class="referencia">ABE03</p>
          </a>

          <a class="mix mixAbertos fancybox" href="img/portfolio/terrario01.jpg" rel="portfolio" title="Terrário aberto">
            <img src="img/portfolio/terrario01.jpg" class="img-responsive">
            <p class="referencia">ABE04</p>
          </a>

          <a class="mix mixFechados fancybox" href="img/portfolio/terrario01.jpg" rel="portfolio" title="Terrário fechado">
            <img src="img/portfolio/terrario01.jpg" class="img-responsive">
            <p class="referencia">FEC01</p>
          </a>

          <a class="mix mixFechados fancybox" href="img/portfolio/terrario01.jpg" rel="portfolio" title="Terrário fechado">
            <img src="img/portfolio/terrario01.jpg" class="img-responsive">
            <p class="referencia">FEC02</p>
          </a>

          <a class="mix mixFechados fancybox" href="img/portfolio/terrario01.jpg" rel="portfolio" title="Terrário fechado">
            <img src="img/portfolio/terrario01.jpg" class="img-responsive">
            <p class="referencia">FEC03</p>
          </a>

          <a class="mix mixFechados fancybox" href="img/portfolio/terrario01.jpg" rel="portfolio" title="Terrário fechado">
            <img src="img/portfolio/terrario01.jpg" class="img-responsive">
            <p class="referencia">FEC04</p>
          </a>

          <div class="gap"></div>
          <div class="gap"></div>
        </div>

      </div><!--container-->
    </section> 
  
    <!-- //Footer: Redes Sociais, Contato e Copyrights// -->
    <?php include("includes/footer.php"); ?>

    <!-- //Scripts// -->
    <?php include("includes/scripts.php"); ?>

    <!-- //Envio de e-mail: Formulário de contato// -->
    <?php include ("includes/mailSend.php"); ?>    
    
  </body>
</html>