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

        <h1>Portfólio</h1>

        <!-- //Filtros// -->
        <div class="controls mixControls">          
          <!--<button class="filter btn btn-default" data-filter="all">Todos</button>
          <button class="filter btn btn-default" data-filter=".mixAbertos">Abertos</button>
          <button class="filter btn btn-default" data-filter=".mixFechados">Fechados</button>-->
        </div>

        <!-- //Galeria// -->
        <div id="mixitup" class="mixitup">
          
          <a class="mix mixAbertos fancybox" href="img/produtos/arranjos/01.jpg" rel="portfolio" title="Mix de rosas">
            <img src="img/produtos/arranjos/01.jpg" class="img-responsive">
          </a>

          <a class="mix mixAbertos fancybox" href="img/produtos/arranjos/02.jpg" rel="portfolio" title="Rosas e margaridas">
            <img src="img/produtos/arranjos/02.jpg" class="img-responsive">
          </a>

          <a class="mix mixAbertos fancybox" href="img/produtos/arranjos/03.jpg" rel="portfolio" title="Rosas vermelhas">
            <img src="img/produtos/arranjos/03.jpg" class="img-responsive">
          </a>

          <a class="mix mixAbertos fancybox" href="img/produtos/arranjos/04.jpg" rel="portfolio" title="Rosas dobradas">
            <img src="img/produtos/arranjos/04.jpg" class="img-responsive">
          </a>

          <a class="mix mixFechados fancybox" href="img/produtos/arranjos/05.jpg" rel="portfolio" title="Rosas azuis">
            <img src="img/produtos/arranjos/05.jpg" class="img-responsive">
          </a>

          <a class="mix mixFechados fancybox" href="img/produtos/arranjos/06.jpg" rel="portfolio" title="Mix de flores">
            <img src="img/produtos/arranjos/06.jpg" class="img-responsive">
          </a>

          <a class="mix mixFechados fancybox" href="img/produtos/arranjos/07.jpg" rel="portfolio" title="Mix de flores">
            <img src="img/produtos/arranjos/07.jpg" class="img-responsive">
          </a>

          <a class="mix mixFechados fancybox" href="img/produtos/arranjos/08.jpg" rel="portfolio" title="Rosas vermelhas">
            <img src="img/produtos/arranjos/08.jpg" class="img-responsive">
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