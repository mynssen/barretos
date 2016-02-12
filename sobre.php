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
    <section class="mainBanner sobre">
      <div class="container">
        <div class="callToAction">
          <h1>Sobre nós</h1>
          <h2>Um pouquinho da nossa história</h2>
          <a class="btn btn-default" href="#anchorContent">Saiba mais</a>
        </div><!--callToAction-->
      </div><!--container-->
    </section>

    <!-- //Separador de Seção// -->
    <div class="styledBorder"></div>

    <!-- //Sobre// -->
    <section class="secDefault secHalf empresa">   
      <span class="anchor" id="anchorContent"></span>     
        
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-6 col-sm-12">

            <article class="boxTexto">
              <h2>Nossa história</h2>
              <p>Somos uma empresa atuante no mercado verde.</p>
              <p>Acreditamos na preservação e cuidado com a natureza, como forma de preservarmos a vida como um todo. 
Dessa forma, trazemos a harmonia e exuberância das plantas para o dia a dia de nossos clientes.</p>
              <p>Administração e responsabilidade paisagística: Amanda Barreto e Cristina Martins.</p>

              <h2>29 anos de tradição</h2>
              <p>Atuamos há 29 anos no mercado, desenvolvendo projetos paisagísticos para diversos locais, executando e cuidando de jardins, prestando assessoria técnica, fornecendo espécies naturais e decorando eventos particulares e corporativos.</p>

              <h2>Mais de 300 clientes</h2>
              <p>Garantimos a qualidade de nossos serviços e produtos na satisfação de nossos clientes. Nosso objetivo está em superar suas expectativas.</p>
            </article>
          
          </div><!--col-->
        </div><!--row-->
      </div><!--container-->

    </section>

    <!-- //Separador de Seção// -->
    <div class="styledBorder"></div>
  
    <!-- //Depoimentos// -->
    <?php include("includes/depoimentos.php"); ?>

    <!-- //Footer: Redes Sociais, Contato e Copyrights// -->
    <?php include("includes/footer.php"); ?>

    <!-- //Scripts// -->
    <?php include("includes/scripts.php"); ?>

    <!-- //Envio de e-mail: Formulário de contato// -->
    <?php include ("includes/mailSend.php"); ?>    
    
  </body>
</html>