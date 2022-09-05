<?php
  session_start();
  ob_start();
  include_once("conexao.php");
  
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $senha_input = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_ENCODED);

  $query_login = "SELECT * from cadastro where email='$email' and senha='$senha_input'";
  $result_login = $conn->prepare($query_login);
  $result_login->execute();
  if(($result_login) and ($result_login->rowCount() != 0)){
      $row_login = $result_login->fetch(PDO::FETCH_ASSOC);
      extract($row_login);
            $_SESSION['nome'] = $nome;
            $_SESSION['id'] = $ID;
            $_SESSION['email'] = $email;
  header("Location: ../index.html");

  }else{
      $_SESSION['id'] = '';
      $_SESSION['msg'] = "Senha ou usuário incorreto!";

      header("Location: ../_login.php");

  }

