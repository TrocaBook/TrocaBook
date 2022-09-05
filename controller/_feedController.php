<?php 
    ob_start();
    include_once("conexao.php");

    $query_post = "SELECT * from postagens";
    $result_post = $conn->prepare($query_post);
    $result_post->execute();

    if(($result_post) and ($result_post->rowCount() != 0)){
        while($row_post = $result_post->fetch(PDO::FETCH_ASSOC)){
            $devolution;
            $likes;
            extract($row_post);
            $profile = $id_perfil;
            $id_book = $ID;
            $query_profile = "SELECT nome, email from cadastro where ID=$profile";
            $result_profile = $conn->prepare($query_profile);
            $result_profile->execute();
            $row_profile = $result_profile->fetch(PDO::FETCH_ASSOC);
            extract($row_profile);

            $query_like = "SELECT count(id_livro) as book from curtida where id_livro=$id_book";
            $result_book = $conn->prepare($query_like);
            $result_book->execute();
            if(($result_book) and ($result_book->rowCount() != 0)){
                $row_book = $result_book->fetch(PDO::FETCH_ASSOC);
                extract($row_book);
                $likes = $book;
            }else{
                $likes = 0;
            }

            $query_devolution = "SELECT count(id_livro) as book from troca where id_livro=$id_book";
            $result_devolution = $conn->prepare($query_devolution);
            $result_devolution->execute();
            if(($result_devolution) and ($result_devolution->rowCount() != 0)){
                $row_devolution = $result_devolution->fetch(PDO::FETCH_ASSOC);
                extract($row_devolution);
                $devolution = $book;
            }else{
                $devolution = 0;
            }
            
            echo "<section id='post' class='position-relative z-index-1 col-12 pt-5'>
            <div id='container-post' class='shadow col-12 col-md-9 container px-0 mt-0 mt-md-5 py-5 py-md-5'>
                <div class='row col-12 px-4'>
                    <div class='col-3'><img class='usuario-post img-fluid d-block post-icon' src='assets/icons/usuario2.png'></div>
                    <div class='col-9'>
                        <h5 class='pt-3 pt-md-3 nome'>$nome</h5>
                    </div>
                </div>
                <div class='text-post col-12 py-4 px-4'>
                    <h6>$descricao</h6>
                </div>
                <div class='imagem-post col-10 col-md-7 pb-5 pt-3'><img class='img-post img-fluid d-block w-auto h-auto px-4' src='assets/img/feed/livro2.jpg'></div>
                <hr style='margin: auto; width: 90%'>
                <div class='row plus-post col-12 col-md-6 px-4 px-md-4 pt-4 px-1'>
                    <div class='icon-img col-4 row'>
                        <a class='col-6 col-md-4' href=controller/_feedPostagem.php?book=$id_book><img class='d-block post-icon-img' src='assets/icons/curtir.png'></a>
                        <div class='col-6 col-md-8'>
                            <h6 class='pt-2'>$likes</h6>
                        </div>
                    </div>
                    <div class='icon-img col-4 row'>
                        <div class='col-6 col-md-4'><img class='d-block post-icon-img' src='assets/icons/comentario.png'></div>
                        <div class='col-6 col-md-8'>
                            <h6 class='pt-2'>0</h6>
                        </div>
                    </div>
                    <div class='icon-img col-4 row'>
                        <a href=controller/_feedTroca.php?book=$id_book class='col-6 col-md-4'><img class='d-block post-icon-img' src='assets/icons/troca.png'></a>
                        <div class='col-6 col-md-8'>
                            <h6 class='pt-2'>$devolution</h6>
                        </div>
                    </div>
                </div>
                <hr style='margin: auto; width: 90%' class=' px-4 px-md-4 pt-4 px-1'>
            </div>
        </section>";
        }
    }