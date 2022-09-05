<?php
    session_start();
    include('conexao.php');
    
    $query_like = "SELECT * from curtida where id_livro='". $_GET['book'] . "' and id_perfil='". $_SESSION['id'] . "' ";
    $like_result = $conn->prepare($query_like);
    $like_result->execute();

    if(($like_result) and ($like_result->rowCount() != 0)){
        $query_insert = "DELETE FROM curtida where id_livro='". $_GET['book'] . "' and id_perfil='". $_SESSION['id'] . "' ";
        $insert_result = $conn->prepare($query_insert);
        $insert_result->execute();
        }else{
        $query_insert = "INSERT INTO curtida (id_livro, id_perfil, curtida) values ('". $_GET['book'] ."', '". $_SESSION['id']. "' , 'true')";
        $insert_result = $conn->prepare($query_insert);
        $insert_result->execute();
    }
    header('Location: ../_feed.php');
    
