<?php 

if(isset($_SESSION)) {
    session_start();
  }

 if(isset($_SESSION['id'])) {
    die("Você não pode acessar essa página, é necessário o login.<p><a href=\"login.php\">Entrar</a></p>");
 }

?>