<?php 
    session_start();
    ob_start();
    include_once("conexao.php");


    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_ENCODED);
    $query_insert = "INSERT INTO cadastro (nome, senha, email) values ('". $dados['nome'] ."', '$senha', '" .  $dados['email'] . "')";
    $result_insert = $conn->prepare($query_insert);
    $result_insert->execute();
    header("Location: ../_login.php");


    