<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <!-- //Head Base// -->
    <?php include ("includes/head.php"); ?>

    <!-- //Flexslider// -->
    <link href="css/flexslider.css" rel="stylesheet">

  </head>
  <body>

    <!-- //Header - Navbar// -->
    <?php include ("includes/header.php"); ?>

    <!-- //Banner Principal// -->
    <section class="mainBanner">
      <div class="container">
        <div class="callToAction">
          <h1>Leve um pedacinho <br> <span>de natureza</span> para sua casa</h1>
          <a class="btn btn-default" href="#anchorProdutos">Conheça nossos produtos</a>
        </div><!--callToAction-->
      </div><!--container-->
    </section>

    <!-- //Separador de Seção// -->
    <div class="styledBorder"></div>

    <!-- //Produtos// -->
    <section class="secProdutos">
      <span class="anchor" id="anchorProdutos"></span>
      <div class="container-fluid">
        <div class="row">
          
          <!-- //Terrários// -->
          <article class="boxProduto col-md-3 col-sm-6 col-xs-12">
            <a href="terrarios.php">
              <img class="img-responsive" src="img/destaqueTerrarios.jpg" alt="Terrários">
              <p>Terrários</p>
            </a>
          </article>
          
          <!-- //Acessórios// -->
          <article class="boxProduto col-md-3 col-sm-6 col-xs-12">
            <a href="terrarios.php">
              <img class="img-responsive" src="img/destaqueAcessorios.jpg" alt="Acessórios">
              <p>Acessórios</p>
            </a>
          </article>
          
          <!-- //Decoração// -->
          <article class="boxProduto col-md-3 col-sm-6 col-xs-12">
            <a href="terrarios.php">
              <img class="img-responsive" src="img/destaqueDecoracao.jpg" alt="Decoração">
              <p>Decoração</p>
            </a>
          </article>
          
          <!-- //Arranjos// -->
          <article class="boxProduto col-md-3 col-sm-6 col-xs-12">
            <a href="terrarios.php">
              <img class="img-responsive" src="img/destaqueArranjos.jpg" alt="Arranjos">
              <p>Arranjos</p>
            </a>
          </article>

        </div><!--row-->
      </div><!--container-fluid-->
    </section>

    <!-- //Fundo Escuro// -->
    <div class="darkBg">

      <!-- //Serviços// -->
      <section class="secServicos">
        
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-12">

              <article class="boxTexto">
                <h2>Paisagismo</h2>
                <p>Desenvolvemos e executamos projetos paisagísticos sob medida, em ambientes externos ou internos. Atendemos a pedidos de empresas e particulares.</p>            
                <h2>Decoração floral</h2>
                <p>Casamentos, aniversários, bodas, festas, e recepções. Deixe seu evento ainda mais bonito com nossas decorações florais.</p>
                <a class="btn btn-default">Conheça nossos serviços</a>
              </article>

            </div><!--col-->
          </div><!--row-->
        </div><!--container-->

      </section>    

      <!-- //Sobre// -->
      <section class="secSobre">        
          
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-6 col-sm-12">

              <article class="boxTexto">
                <h2>A Barreto's Plantas</h2>
                <p>Somos uma empresa atuante no mercado verde. 
  Acreditamos na preservação e cuidado com a natureza, como forma de preservarmos a vida como um todo. </p>
                <a class="btn btn-default">Conheça nossa história</a>
              </article>
            
            </div><!--col-->
          </div><!--row-->
        </div><!--container-->

      </section>

    </div><!--darkBg-->

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
  
    <!-- //Depoimentos// -->
    <?php include("includes/depoimentos.php"); ?>

    <!-- //Footer: Redes Sociais, Contato e Copyrights// -->
    <?php include("includes/footer.php"); ?>

    <!-- //Scripts Base// -->
    <?php include("includes/scripts.php"); ?>
    
    <!-- //Flexslider// -->
    <script src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
      $(window).load(function() {
        $('.flexslider').flexslider({
          directionNav: false
        });
      });
    </script>
    
  </body>
</html>