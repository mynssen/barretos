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
    <section class="mainBanner decoracao">
      <div class="container">
        <div class="callToAction">
          <h1>Decoração</h1>
          <h2>Móveis e peças com um toque de natureza</h2>
          <a class="btn btn-default" href="#anchorContent">Conheça os modelos</a>
        </div><!--callToAction-->
      </div><!--container-->
    </section>

    <!-- //Separador de Seção// -->
    <div class="styledBorder"></div>

    <!-- //Terrários Abertos// -->
    <section class="secDefault secHalf decoracao">   
      <span class="anchor" id="anchorContent"></span>     
        
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-6 col-sm-12">

            <article class="boxTexto">
              <h2>Para sua casa ficar ainda mais verde</h2>
              <p>Nossa linha de móveis e peças de decoração é desenvolvida, é claro, com detalhes reservados para um toque ecológico.</p>
              <p>Mesmos em locais inusitados a natureza pode compor o ambiente, proporcionando maior leveza e bem-estar aos seus frequentadores.</p>
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

        <h1>Em breve uma coleção novinha em folha pra você!</h1>

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