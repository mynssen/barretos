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
    <section class="mainBanner servicos">
      <div class="container">
        <div class="callToAction">
          <h1>Serviços</h1>
          <h2>Que tal um projeto realizado pela nossa equipe?</h2>
          <a class="btn btn-default" href="#anchorContent">Saiba mais</a>
        </div><!--callToAction-->
      </div><!--container-->
    </section>

    <!-- //Separador de Seção// -->
    <div class="styledBorder"></div>

    <!-- //Sobre// -->
    <section class="secDefault secHalf servicos">   
      <span class="anchor" id="anchorContent"></span>     
        
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-6 col-sm-12">

            <article class="boxTexto">
              <h2>Paisagismo</h2>
              <p>Desenvolvemos e executamos projetos paisagísticos sob medida, em ambientes externos ou internos, atendendo a pedidos de empresas e particulares.</p>
              <p>Nosso objetivo está em trazer a natureza para onde você estiver.</p>

              <h2>Decoração floral</h2>
              <p>Casamentos, aniversários, bodas, festas, e recepções. Deixe seu evento ainda mais bonito com nossas decorações florais. Também criamos arranjos e buquês naturais, feitos com flores frescas, escolhidas sob medida para cada ocasião.</p>

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
          <button class="filter btn btn-default" data-filter="all">Tudo</button>
          <button class="filter btn btn-default" data-filter=".mixTerrarios">Terrários</button>
          <button class="filter btn btn-default" data-filter=".mixAcessorios">Acessórios</button>
          <button class="filter btn btn-default" data-filter=".mixArranjos">Arranjos</button>
          <button class="filter btn btn-default" data-filter=".mixPaisagismo">Paisagismo</button>
        </div>

        <!-- //Galeria// -->
        <div id="mixitup" class="mixitup">
          <a class="mix mixTerrarios fancybox" href="img/portfolio/terrario01.jpg" rel="portfolio" title="Terrário aberto"><img src="img/portfolio/terrario01.jpg" class="img-responsive"></a>
          <a class="mix mixPaisagismo fancybox" href="img/portfolio/paisagismo01.jpg" rel="portfolio" title="Paisagismo"><img src="img/portfolio/paisagismo01.jpg" class="img-responsive"></a>
          <a class="mix mixAcessorios fancybox" href="img/portfolio/acessorio01.jpg" rel="portfolio" title="Pingente terrário"><img src="img/portfolio/acessorio01.jpg" class="img-responsive"></a>
          <a class="mix mixAcessorios fancybox" href="img/portfolio/acessorio02.jpg" rel="portfolio" title="Pingente terrário"><img src="img/portfolio/acessorio02.jpg" class="img-responsive"></a>
          <a class="mix mixTerrarios fancybox" href="img/portfolio/terrario02.jpg" rel="portfolio" title="Terrários fechados"><img src="img/portfolio/terrario02.jpg" class="img-responsive"></a>
          <a class="mix mixTerrarios fancybox" href="img/portfolio/terrario03.jpg" rel="portfolio" title="Terrário aberto"><img src="img/portfolio/terrario03.jpg" class="img-responsive"></a>
          <a class="mix mixArranjos fancybox" href="img/portfolio/arranjo01.jpg" rel="portfolio" title="Buquê de rosas vermelhas"><img src="img/portfolio/arranjo01.jpg" class="img-responsive"></a>
          <a class="mix mixPaisagismo fancybox" href="img/portfolio/paisagismo02.jpg" rel="portfolio" title="Paisagismo - Vasos e pedras"><img src="img/portfolio/paisagismo02.jpg" class="img-responsive"></a>
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