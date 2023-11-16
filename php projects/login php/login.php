<?php

 include('conexao.php');

 if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Por favor, informe seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    }
     else {
        $email = $mysqli -> real_escape_string($_POST['email']);
        $senha = $mysqli -> real_escape_string($_POST['senha']);

        $sgl_code = "SELECT * FROM usuários WHERE email = '$email' AND senha = '$senha' ";
        $sql_query = $mysqli -> query($sql_code) or die("Falha na execução do código: " .$mysqli -> error);
    
       $quantidade = $sql_query -> num_rows;

        if($quantidade == 1) {
          
          $usuario = $sql_query -> fetch_assoc();

          if(isset($_SESSION)) {
            session_start();
          }
      
        $_SESSION['user'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: painel.php");

        }
          else {
            echo "Falha no login: E-mail ou Senha incorretos";
          }
    }
 }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acessar conta</h1>
      <form action="" method="POST">
        <p>
        <label for="email">E-mail</label>
        <input type="text" name="email">
        </p>
        <p>
        <label for="senha">Password</label>
        <input type="password" name="password">
        </p>
        <button type="submit">Enter</button>
      </form>    
</body>
</html>