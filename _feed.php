<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <title>TrocaBook</title>
    <meta charset="UTF-8">
    <meta name="description" content="Hot site sobre troca de livros">
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
    <header id="header" class="shadow z-index-2"></header>
    <main id="home" class="main flex-shrink-0 pb-5">
        <?php
        session_start();
        if ($_SESSION['id']){
        ?>
            <section id="postar" class="position-relative z-index-1 col-12 pt-5 pt-md-0">
                <div id="container-postar" class="shadow col-12 col-md-8 container px-0 mt-0 mt-md-5 pt-5 pt-md-5">
                    <div class="row col-12">
                        <div class="col-3"><img class="usuario-post img-fluid d-block post-icon" src="assets/icons/usuario2.png"></div>
                        <div class="col-9"><textarea class="btn-form" id="text22" placeholder="Qual livro gostaria de compartilhar?"></textarea></div>
                    </div>
                    <div class="row plus-post col-12 col-12">
                        <div class="icon-img col-12 row">
                            <div class="col-4"><img class="d-block post-icon-img" src="assets/icons/add-imagem.png"></div>
                            <div class="col-8">
                                <h6 id="text23">Adicione uma imagem</h6>
                            </div>
                        </div>
                        <p id="btn-postar" class="area-btn d-md-block"><a class="btn btn-lg btn-primary" href="#" id="text24">Postar</a></p>
                    </div>
                </div>
            </section>
        <?php
        }
        include_once('./controller/_feedController.php')
        ?>
    </main>
    <footer id="footer">
        <div class="container"></div>
    </footer>
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