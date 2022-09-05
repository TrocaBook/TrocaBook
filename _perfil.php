<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <title>TrocaBook</title>
    <meta charset="UTF-8">
    <meta name="description" content="Hot site sobre TrocaBook Transperineal">
    <meta name="keywords" content="Site informativo">
    <meta name="author" content="SpaceCode">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="manifest" href="assets/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--- inclusão de fontees personalizadas -->
    <link id="style" rel="stylesheet" type="text/css" href="assets/fonts/font-gotham-rounded.css">
    <link id="style" rel="stylesheet" type="text/css" href="assets/fonts/font-gotham.css">
    <!--- inclusão de fontees personalizadas -->
    <link id="style" rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="home" rel="stylesheet" type="text/css" href="assets/css/home.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column h-100 bg-white">
    <?php
    if ($_SESSION['id']) {
    ?>
        <header id="header" class="shadow z-index-2"></header>
        <main id="home" class="main flex-shrink-0">
            <section class="container-img-total">
                <picture>
                    <source srcset="assets/img/perfil/capa.jpg" media="(min-width: 800px)"><img class="img-total" src="assets/img/perfil/capa2.jpg" alt="background">
                </picture>
                <div class="row col-12">
                    <div class="area-img-perfil container col-6"><img class="d-block foto-perfil" src="assets/img/comments/usuario.jpg"></div>
                    <div class="area-text-perfil container col-6">
                        <h3 class="d-block nome-perfil pt-3 pt-md-5">
                            <?php
                            echo $_SESSION['nome']
                            ?>
                        </h3>
                    </div>
                </div>
            </section>
            <section id="favoritos" class="position-relative z-index-1 col-12 pt-5 pt-md-0">
                <div id="container-livros-favoritos" class="container col-12 px-0 mt-0 mt-md-5 pt-5 pt-md-5">
                    <h2 id="text18">Curtidas</h2>
                    <div class="row">
                        <?php
                        include_once("./controller/_perfilCurtidaController.php")
                        ?>
                    </div>
                </div>
            </section>
            <section id="favoritos" class="position-relative z-index-1 col-12 pt-5 pt-md-0 pb-2">
                <div id="container-livros-favoritos" class="container col-12 px-0 mt-0 mt-md-5 pt-5 pt-md-5">
                    <h2 id="text19">Postagens feitas</h2>
                    <div class="row">
                        <?php
                        include_once("./controller/_perfilPostagensController.php")
                        ?>
                    </div>
                </div>
            </section>
        </main>
        <footer id="footer" class="align-items-end">
            <div class="container"></div>
        </footer>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6500806379.js" crossorigin="anonymous"></script>
    <script id="dist" src="assets/js/dist.min.js"></script>
    <script>
        $(function() {
            $("#header").load("_nav.php");
        });
        $(function() {
            $("#banner").load("_banner.html");
        });
        $(function() {
            $("#footer").load("_footer.html");
        });
        $(function() {
            var card = $(".overimg");
            card.on('mousemove', function(e) {
                var x = e.clientX - $(this).offset().left + $(window).scrollLeft();
                var y = e.clientY - $(this).offset().top + $(window).scrollTop();

                var rY = map(x, 0, $(this).width(), -17, 17);
                var rX = map(y, 0, $(this).height(), -17, 17);

                $(this).children(".image").css("transform", "rotateY(" + rY + "deg)" + " " + "rotateX(" + -rX + "deg)");
            });

            card.on('mouseenter', function() {
                $(this).children(".image").css({
                    transition: "all " + 0.05 + "s" + " linear",
                });
            });

            card.on('mouseleave', function() {
                $(this).children(".image").css({
                    transition: "all " + 0.2 + "s" + " linear",
                });

                $(this).children(".image").css("transform", "rotateY(" + 0 + "deg)" + " " + "rotateX(" + 0 + "deg)");
            });

            function map(x, in_min, in_max, out_min, out_max) {
                return (x - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
            }
        });
        window.onbeforeunload = function() {
            // Salva dados
        };
        document.oncontextmenu = function(e) {
            // e.preventDefault();
        }
        var resourcePath0 = 'assets/css/style.css';
        var resourcePath2 = 'assets/js/dist.min.js';
        var resourcePath3 = 'assets/css/home.css';


        document.getElementById('style').src = resourcePath0 + '?v=' + Date.now();
        document.getElementById('home').src = resourcePath3 + '?v=' + Date.now();
        document.getElementById('dist').src = resourcePath2 + '?v=' + Date.now();
    </script>
</body>

</html>