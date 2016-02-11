<?php
  
  if (!empty($_POST)) {
      // Passando os dados obtidos pelo formul�rio para as vari�veis abaixo
      $nomeremetente     = $_POST['nome'];
      $emailremetente    = $_POST['email'];
      $emaildestinatario = 'contato@barretosplantas.com.br';
      //$comcopiaoculta    = $_POST['comcopiaoculta'];
      //$telefone           = $_POST['telefone'];
      $assunto           = 'Contato - Site';
      $mensagem          = $_POST['mensagem'];

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
      
      // Check if email has been entered and is valid
      if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          $errEmail = 'Por favor, informe um e-mail válido.';
      }
      
      //Check if message has been entered
      if (!$_POST['mensagem']) {
          $errMessage = 'Por favor, informe sua mensagem.';
      }


      // If there are no errors, send the email
      if (!$errName && !$errEmail && !$errMessage) {

        require_once('send/class.phpmailer.php');
         
        $mailer = new PHPMailer();
        $mailer->IsSMTP();
        $mailer->SMTPDebug = 1;
        $mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails
        //$mailer->SMTPSecure = "tls"; (opção usada somente na plesk 11.5 - Linux)
        $mailer->Host = 'smtp.barretosplantas.com.br';
        $mailer->SMTPAuth = true; //define se haverá ou não autenticação no SMTP
        $mailer->Username = 'contato@barretosplantas.com.br'; //Informe o e-mai o completo
        $mailer->Password = 'pipinha@01'; //Senha da caixa postal
        $mailer->FromName = $nomeremetente; //Nome que será exibido para o destinatário
        $mailer->From = 'contato@barretosplantas.com.br'; //Obrigatório ser a mesma caixa postal indicada em "username"
        $mailer->AddAddress($emaildestinatario); //Destinatários
        $mailer->AddReplyTo($emailremetente); //Destinatários
        $mailer->Subject = $assunto;
        $mailer->Body = '
        Mensagem enviada pelo site da Carioqueria (formulário de contato).
        
        Nome: '.$nomeremetente.'
        E-mail: '.$emailremetente.'
        Mensagem: '.$mensagem.'
        ';

      }//if
    }//if

  ?>