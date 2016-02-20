<!-- //Redes Sociais// -->
<section class="secSocial">
  <div class="container">

    <h1>Siga-nos</h1>
    <ul>
      <li><a href="https://www.facebook.com/barretosplantas/" target="_blank">@barretosplantas</a></li>
      <li><a class="instagram" href="https://www.instagram.com/barretosplantas/" target="_blank">/barretosplantas</a></li>
    </ul>

  </div><!--container-->
</section>

<!-- //Contato// -->
<section class="contato">
  
  <div class="container">
    <div class="row">
      
      <!-- //Formulário de contato// -->
      <div class="formContato col-md-6">
        
        <h1>Entre em contato</h1>
        <p>Gostou de nossos produtos? Quer solicitar um orçamento, tirar alguma dúvida ou só mandar um alô? Envie uma mensagem pra gente!</p>

        <form method="post" action="index.php#anchorContato">
          <div class="row">

          <div class="form-group col-sm-12">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" value="<?php echo htmlspecialchars($_POST['nome']);?>" >
              <?php echo "<p class='text-danger'>$errName</p>";?>
            </div>
            <div class="form-group col-sm-6">
              <label for="telefone">Telefone</label>
              <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone" value="<?php echo htmlspecialchars($_POST['telefone']);?>" >
              <?php echo "<p class='text-danger'>$errTel</p>";?>
            </div>
            <div class="form-group col-sm-6">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" value="<?php echo htmlspecialchars($_POST['email']);?>">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
            <div class="form-group col-sm-12">
              <label for="mensagem">Mensagem</label>
              <textarea rows="4" class="form-control" id="mensagem" name="mensagem" placeholder="Digite sua mensagem"><?php echo htmlspecialchars($_POST['mensagem']);?></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
            <div class="form-group col-sm-12">
              <button type="submit" class="btn btn-default">Enviar</button>
            </div>

            <span class="anchor" id="anchorContato"></span>

          </div><!--row-->
        </form>

      </div><!--col-->

      <!-- //Lista de Contatos// -->
      <div class="col-md-6">
        <article class="boxContatos">
          
          <h2>Telefone</h2>
          <p>(21) 99857.6746 | (21) 99919.3180</p>
          <p>(21) 3332.7983 | (21) 3164.2803</p>

          <h2>E-mail</h2>
          <p>contato@barretosplantas.com.br</p>

          <h2>Horário de atendimento</h2>
          <p>De segunda à sexta, de 9:00 as 18:00</p>

        </article>
      </div><!--col-->

    </div><!--row-->
  </div><!--container-->
</section><!--contato-->     

<!-- //Footer - Copyrights// -->
<footer class="footer">
  <div class="container">
    <p>Barreto's Plantas <?php echo date("Y"); ?> | Todos os direitos reservados.</p>
  </div><!--container-->
</footer>

<!-- //Mensagem do formulário de contato - Erro// -->
<article class="modal fade" id="modalMailError" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title">Erro no envio</h1>
      </div><!--modal-header-->
      <div class="modal-body">
        <p>Houve um erro no envio da sua mensagem.</p>
        <p>Tente novamente em alguns minutos ou entre em contato diretamente conosco pelos telefones <strong>(21) 99857.6746 | (21) 99919.3180 | (21) 3332.7983 | (21) 3164.2803</strong> ou pelo e-mail <strong>contato@barretosplantas.com.br</strong>.</p>
      </div><!--modal-body-->
    </div><!--modal-content-->
  </div><!--modal-dialog-->
</article><!--modal-->

<!-- //Mensagem do formulário de contato - Sucesso// -->
<article class="modal fade" id="modalMailSuccess" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title">Mensagem enviada!</h1>
      </div><!--modal-header-->
      <div class="modal-body">
        <p>Sua mensagem foi enviada com sucesso. Em breve entraremos em contato. Obrigado!</p>
      </div><!--modal-body-->
    </div><!--modal-content-->
  </div><!--modal-dialog-->
</article><!--modal-->