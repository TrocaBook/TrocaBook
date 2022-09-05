<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <title>TrocaBook</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Hot site sobre troca de livros" />
    <meta name="keywords" content="Site informativo" />
    <meta name="author" content="SpaceCode" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="manifest" href="assets/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--- inclusão de fontees personalizadas -->
    <link id="style" rel="stylesheet" type="text/css" href="assets/fonts/font-gotham-rounded.css" />
    <link id="style" rel="stylesheet" type="text/css" href="assets/fonts/font-gotham.css" />


    <!--- inclusão de fontees personalizadas -->
    <link id="style" rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link id="home" rel="stylesheet" type="text/css" href="assets/css/home.css" />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>


<body class="d-flex flex-column h-100 bg_login">
    <main id="home" class="main flex-shrink-0">
        <section id="login" class="position-relative z-index-1 col-12">
            <div class="container-LoginCentral col-10 m-auto">
                <div class="row area-login">
                    <div id="login-img-area" class="border-radius bg-white position-relative col-md-6">
                        <img class="d-block login-img" src="assets/img/login/login.jpg" alt="background">
                    </div>
                    <div class="border-radius position-relative col-md-6 px-0 px-md-4 px-md-0 ps-md-5 pt-0 pt-md-5 bg_loginInterior">
                        <div>
                            <div class="text-center text-black pt-0 pt-md-3 mt-5">
                                <h2><b>Olá, caro leitor.</b></h2>
                                <h2>Seja bem-vindo!</h2>
                            </div>
                            <form class="form mb-md-0 mb-5" method="POST" action="./controller/_cadastroController.php">
                                <label class="label-input" for="">
                                    <i class="far fa-user icon-modify"></i>
                                    <input type="text" placeholder="Nome" id="nome" name="nome" required>
                                </label>

                                <label class="label-input" for="">
                                    <i class="far fa-envelope icon-modify"></i>
                                    <input type="email" placeholder="E-mail" id="email" name="email" required>
                                </label>
                                <label class="label-input" for="">
                                    <i class="fas fa-unlock-alt icon-modify"></i>
                                    <input type="password" placeholder="Senha" id="senha" name="senha" required>
                                </label>

                                <center>

                                    <input class="btn-login" type="submit" name="cadUser">

                                    <li><a id="cadastro" class="btn btn-second" href="_login.php">Eu já possuo um cadastro</a></li>

                                </center>

                                <br>
                                <!-- <button id="cadastro" class="btn btn-second">sign up</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6500806379.js" crossorigin="anonymous"></script>
    <script id="dist" src="assets/js/dist.min.js"></script>
    <script>
        $(function() {
            $("#header").load("_nav.html");
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