<?php
  
  if (!empty($_POST)) {
      // Passando os dados obtidos pelo formul�rio para as vari�veis abaixo
      $nomeremetente     = $_POST['nome'];
      $emailremetente    = $_POST['email'];
      $emaildestinatario = 'contato@barretosplantas.com.br';
      //$comcopiaoculta    = $_POST['comcopiaoculta'];
      $telefone           = $_POST['telefone'];
      $assunto           = 'Contato - Site';
      $mensagem          = $_POST['mensagem'];
      $fullMessage      = '
        <p>Mensagem enviada pelo site da Barretos Plantas (formulário de contato).</p>        
        <p>Nome: '.$nomeremetente.'</p>
        <p>Telefone: '.$telefone.'</p>
        <p>E-mail: '.$emailremetente.'</p>
        <p>Mensagem: '.$mensagem.'</p>';

      $fullMessageAlt      = '
        Mensagem enviada pelo site da Barretos Plantas (formulário de contato). \r\n        
        Nome: '.$nomeremetente.' \r\n 
        Telefone: '.$telefone.' \r\n 
        E-mail: '.$emailremetente.' \r\n 
        Mensagem: '.$mensagem.'';

      /*$nomeremetente     = 'rodrigo';
      $emailremetente    = 'rmynssen@gmail.com';
      $emaildestinatario = 'rmynssen@gmail.com';
      //$comcopiaoculta    = $_POST['comcopiaoculta'];
      //$telefone           = $_POST['telefone'];
      $assunto           = 'assunto';
      $mensagem          = 'mensagem de teste';*/
      
      // Check if name has been entered
      if (!$_POST['nome']) {
          $errName = 'Por favor, informe seu nome.';
      }

      if (!$_POST['telefone']) {
          $errTel = 'Por favor, informe seu telefone.';
      }
      
      // Check if email has been entered and is valid
      if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          $errEmail = 'Por favor, informe um e-mail válido.';
      }
      
      //Check if message has been entered
      if (!$_POST['mensagem']) {
          $errMessage = 'Por favor, informe sua mensagem.';
      }


      // If there are no errors, send the email
      if (!$errName && !$errTel && !$errEmail && !$errMessage) {

        require('phpmailer/class.phpmailer.php');
        $mail = new PHPMailer();

        //Define os dados do servidor e tipo de conexão
        $mail->IsSMTP(); // Define que a mensagem será SMTP
        $mail->SMTPDebug = 1;
        $mail->Port = 587; //Indica a porta de conexão para a saída de e-mails
        $mail->Host = "smtp.barretosplantas.com.br"; // Endereço do servidor SMTP
        $mail->SMTPAuth = true; // Autenticação
        $mail->Username = 'contato@barretosplantas.com.br'; // Usuário do servidor SMTP
        $mail->Password = 'pipinha@01'; // Senha da caixa postal utilizada

        //Define o remetente
        $mail->From = "barretosplantas@barretosplantas.com.br"; 
        $mail->FromName = $nomeremetente;

        //Define os destinatário(s)
        $mail->AddAddress($emaildestinatario);
        //$mail->AddAddress('e-mail@destino2.com.br');
        //$mail->AddCC('copia@dominio.com.br', 'Copia'); 
        //$mail->AddBCC('CopiaOculta@dominio.com.br', 'Copia Oculta');

        //Define os dados técnicos da Mensagem
        $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
        $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

        //Texto e Assunto
        $mail->Subject  = $assunto; // Assunto da mensagem
        $mail->Body = $fullMessage;
        $mail->AltBody = $fullMessageAlt;

        //Envio da Mensagem realizado em includes/footer.php


      }//if
    }//if

  ?>