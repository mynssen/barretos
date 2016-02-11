<!-- //Redes Sociais// -->
<section class="secSocial">
  <div class="container">

    <h1>Siga-nos</h1>
    <ul>
      <li><a href="" target="_blank">@barretosplantas</a></li>
      <li><a class="instagram" href="" target="_blank">/barretosplantas</a></li>
    </ul>

  </div><!--container-->
</section>

<!-- //Contato// -->
<section class="contato">
  <span class="anchor" id="anchorContato"></span>

  <div class="container">
    <div class="row">
      
      <!-- //Formulário de contato// -->
      <div class="formContato col-md-6">
        
        <h1>Entre em contato</h1>
        <p>Gostou de nossos produtos? Quer solicitar um orçamento, tirar alguma dúvida ou só mandar um alô? Envie uma mensagem pra gente!</p>

        <form>
          <div class="row">

          <div class="form-group col-sm-12">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" value"<?php echo htmlspecialchars($_POST['nome']);?>" required>
              <?php echo "<p class='text-danger'>$errName</p>";?>
            </div>
            <div class="form-group col-sm-6">
              <label for="telefone">Telefone</label>
              <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone">
            </div>
            <div class="form-group col-sm-6">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" value="<?php echo htmlspecialchars($_POST['email']);?>" required>
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
            <div class="form-group col-sm-12">
              <label for="mensagem">Mensagem</label>
              <textarea rows="4" class="form-control" id="mensagem" name="mensagem" placeholder="Digite sua mensagem" value="<?php echo htmlspecialchars($_POST['nome']);?>"></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
            <div class="form-group col-sm-12">
              <button type="submit" class="btn btn-default">Enviar</button>
            </div>

            <div class="form-group col-sm-12">
              <?php echo $result; ?>    
            </div>

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
    <p>Barreto's Plantas 2016 | Todos os direitos reservados.</p>
  </div><!--container-->
</footer>    