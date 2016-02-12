<?php 
  if (!empty($_POST)) {
    if(!$mail->Send())
    {
      echo "
        <script type='text/javascript'>
          $('#modalMailError').modal('show');
        </script>";
    } else {
      print " 
        <script type='text/javascript'>
          $('#modalMailSuccess').modal('show');
        </script>";
    }
  }
?>