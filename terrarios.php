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
    <section class="mainBanner terrarios">
      <div class="container">
        <div class="callToAction">
          <h1>Terrários</h1>
          <h2>Um jardim que <span>cabe na sua estante</span></h2>
          <a class="btn btn-default" href="#anchorContent">Conheça os modelos</a>
        </div><!--callToAction-->
      </div><!--container-->
    </section>

    <!-- //Separador de Seção// -->
    <div class="styledBorder"></div>

    <div class="darkBg">

      <!-- //Terrários Abertos// -->
      <section class="secHalf terrarioAberto">   
        <span class="anchor" id="anchorContent"></span>     
          
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-6 col-sm-12">

              <article class="boxTexto">
                <h2>Terrários abertos</h2>
                <p>Peças únicas, que possuem a capacidade de deixar qualquer ambiente mais cheio de vida.</p>
                <p>Nossos jardins são criados com plantas tropicais, como musgos, orquídeas e também bonsais, cactos e suculentas. Feitos  para quem tem pouco espaço e muita vontade de ter um cantinho verde.</p>
                <p>Ter um jardim crescendo dentro de casa reforça a conexão com a natureza e o que ela tem para nos oferecer de bom, todos os dias.</p>
                <p>Além de objetos de decoração belos e dinâmicos, eles nos chamam a atenção para a grandeza da natureza e todo o universo que habita num simples e pequeno espaço.</p>
              </article>
            
            </div><!--col-->
          </div><!--row-->
        </div><!--container-->
      </section>

      <!-- //Terrários Fechados// -->
      <section class="secHalf imgRight terrarioFechado">   
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-12">

              <article class="boxTexto">
                <h2>Terrários fechados</h2>
                <p>São mini ecossistemas que representam de forma perfeita a sustentabilidade.</p>
                <p>Podem ser formados por diversas espécies naturais, desde que as mesmas sobrevivam em local úmido, como é o caso do musgo.</p>
                <p>Por estarem tampados, a rega deve ser feita, no máximo, mensalmente.</p>
                <p>A pouca água borrifada dentro do pote será absorvida pela planta e depois evaporará para a atmosfera. Como o pote está fechado, a água condensa no vidro e então escorre novamente para umedecer o solo.</p>
                <p>Deve ser mantido fora do sol, se adaptando muito bem a locais fechados, com luz artificial, como residências e escritórios.</p>
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

        <h1>Nosso catálogo</h1>

        <!-- //Filtros// -->
        <div class="controls mixControls">          
          <button class="filter btn btn-default" data-filter="all">Todos</button>
          <button class="filter btn btn-default" data-filter=".mixAbertos">Abertos</button>
          <button class="filter btn btn-default" data-filter=".mixFechados">Fechados</button>
        </div>

        <!-- //Galeria// -->
        <div id="mixitup" class="mixitup">
          
          <a class="mix mixAbertos fancybox" href="img/produtos/terrarios/abc01.jpg" rel="abc01" title="Terrário aberto">
            <img src="img/produtos/terrarios/thumbs/abc01.jpg" class="img-responsive">
            <p class="referencia">ABC01</p>
          </a>

          <a class="mix mixAbertos fancybox" href="img/produtos/terrarios/abc02.jpg" rel="abc02" title="Terrário aberto">
            <img src="img/produtos/terrarios/thumbs/abc02.jpg" class="img-responsive">
            <p class="referencia">ABC02</p>
          </a>

          <a class="mix mixAbertos fancybox" href="img/produtos/terrarios/abc03.jpg" rel="abc03" title="Terrário aberto">
            <img src="img/produtos/terrarios/thumbs/abc03.jpg" class="img-responsive">
            <p class="referencia">ABC03</p>
          </a>

          <a class="mix mixAbertos fancybox" href="img/produtos/terrarios/abc04.jpg" rel="abc04" title="Terrário aberto">
            <img src="img/produtos/terrarios/thumbs/abc04.jpg" class="img-responsive">
            <p class="referencia">ABC04</p>
          </a>
          <a class="fancybox" href="img/produtos/terrarios/abc04B.jpg" rel="abc04" title="Terrário aberto"></a>

          <a class="mix mixAbertos fancybox" href="img/produtos/terrarios/abc05.jpg" rel="abc05" title="Terrário aberto">
            <img src="img/produtos/terrarios/thumbs/abc05.jpg" class="img-responsive">
            <p class="referencia">ABC05</p>
          </a>

          <a class="mix mixAbertos fancybox" href="img/produtos/terrarios/abm01.jpg" rel="abm01" title="Terrário aberto">
            <img src="img/produtos/terrarios/thumbs/abm01.jpg" class="img-responsive">
            <p class="referencia">ABM01</p>
          </a>
          <a class="fancybox" href="img/produtos/terrarios/abm01B.jpg" rel="abm01" title="Terrário aberto"></a>

          <a class="mix mixAbertos fancybox" href="img/produtos/terrarios/abm02.jpg" rel="abm02" title="Terrário aberto">
            <img src="img/produtos/terrarios/thumbs/abm02.jpg" class="img-responsive">
            <p class="referencia">ABM02</p>
          </a>
          <a class="fancybox" href="img/produtos/terrarios/abm02B.jpg" rel="abm02" title="Terrário aberto"></a>

          <a class="mix mixAbertos fancybox" href="img/produtos/terrarios/abm03.jpg" rel="abm03" title="Terrário aberto">
            <img src="img/produtos/terrarios/thumbs/abm03.jpg" class="img-responsive">
            <p class="referencia">ABM03</p>
          </a>
          <a class="fancybox" href="img/produtos/terrarios/abm03B.jpg" rel="abm03" title="Terrário aberto"></a>

          <a class="mix mixAbertos fancybox" href="img/produtos/terrarios/abm04.jpg" rel="abm04" title="Terrário aberto">
            <img src="img/produtos/terrarios/thumbs/abm04.jpg" class="img-responsive">
            <p class="referencia">ABM04</p>
          </a>
          <a class="fancybox" href="img/produtos/terrarios/abm04B.jpg" rel="abm04" title="Terrário aberto"></a>

          <a class="mix mixFechados fancybox" href="img/produtos/terrarios/fec01.jpg" rel="fec01" title="Terrário fechado">
            <img src="img/produtos/terrarios/thumbs/fec01.jpg" class="img-responsive">
            <p class="referencia">FEC01</p>
          </a>
          <a class="fancybox" href="img/produtos/terrarios/fec01B.jpg" rel="fec01" title="Terrário fechado"></a>

          <a class="mix mixFechados fancybox" href="img/produtos/terrarios/fec02.jpg" rel="fec02" title="Terrário fechado">
            <img src="img/produtos/terrarios/thumbs/fec02.jpg" class="img-responsive">
            <p class="referencia">FEC02</p>
          </a>

          <a class="mix mixFechados fancybox" href="img/produtos/terrarios/fec03.jpg" rel="fec03" title="Terrário fechado">
            <img src="img/produtos/terrarios/thumbs/fec03.jpg" class="img-responsive">
            <p class="referencia">FEC03</p>
          </a>
          <a class="fancybox" href="img/produtos/terrarios/fec03B.jpg" rel="fec03" title="Terrário fechado"></a>

          <a class="mix mixFechados fancybox" href="img/produtos/terrarios/fec04.jpg" rel="fec04" title="Terrário fechado">
            <img src="img/produtos/terrarios/thumbs/fec04.jpg" class="img-responsive">
            <p class="referencia">FEC04</p>
          </a>
          <a class="fancybox" href="img/produtos/terrarios/fec04B.jpg" rel="fec04" title="Terrário fechado"></a>

          <a class="mix mixFechados fancybox" href="img/produtos/terrarios/mini01.jpg" rel="mini01" title="Terrário fechado">
            <img src="img/produtos/terrarios/thumbs/mini01.jpg" class="img-responsive">
            <p class="referencia">MINI01</p>
          </a>
          <a class="fancybox" href="img/produtos/terrarios/mini01B.jpg" rel="mini01" title="Terrário fechado"></a>

          <a class="mix mixAbertos fancybox" href="img/produtos/terrarios/tm01.jpg" rel="tm01" title="Terrário aberto">
            <img src="img/produtos/terrarios/thumbs/tm01.jpg" class="img-responsive">
            <p class="referencia">TM01</p>
          </a>
          <a class="fancybox" href="img/produtos/terrarios/tm01B.jpg" rel="tm01" title="Terrário aberto"></a>
          <a class="fancybox" href="img/produtos/terrarios/tm01C.jpg" rel="tm01" title="Terrário aberto"></a>






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