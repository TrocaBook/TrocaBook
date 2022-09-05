<?php 
    ob_start();
    include_once("conexao.php");

    $query_post = "SELECT * from postagens where id_perfil='". $_SESSION['id'] ."'";
    $result_post = $conn->prepare($query_post);
    $result_post->execute();

    if(($result_post) and ($result_post->rowCount() != 0)){
        while($row_post = $result_post->fetch(PDO::FETCH_ASSOC)){
           extract($row_post);
           $query_book = "SELECT * from postagens where ID=$id_livro";
           $result_book = $conn->prepare($query_book);
           $result_book->execute();
           $row_book = $result_book->fetch(PDO::FETCH_ASSOC);
           extract($row_book);
           
           $query_profile = "SELECT nome from cadastro where ID=$id_perfil";
           $result_profile = $conn->prepare($query_profile);
           $result_profile->execute();
           $row_profile = $result_profile->fetch(PDO::FETCH_ASSOC);
           extract($row_profile);

           echo " <div class='col-12 col-md-4 px-3 py-3'>
                <div class='col-12 colunas-favoritos shadow'>
                    <div class='img-favoritos col-12'><img class='d-block w-100 h-auto img-livro-perfil px-2 py-5' src='assets/img/feed/livro3.jpg'></div>
                    <div class='icon-img col-12 px-2'>
                        <div class='col-11'>
                            <h7>$titulo<br>$nome</h7>
                        </div>
                    </div>
                    <hr>
                    <div class='row plus-post col-12 col-md-12 px-4 px-md-4 pt-2 px-1 pb-3'>
                        <div class='icon-img col-12 row'>
                            <div class='col-4'><img class='d-block post-icon-img' src='assets/icons/interesse.png'></div>
                        </div>
                    </div>
                </div>
            </div>";
        }
    }else{
        echo 'Sem postagem';
    }

