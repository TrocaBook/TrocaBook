<!DOCTYPE html><html lang="pt_BR"><head><title>TrocaBook</title><meta charset="UTF-8"><meta name="description" content="Hot site sobre troca de livros"><meta name="keywords" content="Site informativo"><meta name="author" content="SpaceCode"><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="manifest" href="assets/fav/manifest.json"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="assets/fav/ms-icon-144x144.png"><meta name="theme-color" content="#ffffff"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><!--- inclusão de fontees personalizadas --><link id="style" rel="stylesheet" type="text/css" href="assets/fonts/font-gotham-rounded.css"><link id="style" rel="stylesheet" type="text/css" href="assets/fonts/font-gotham.css"><!--- inclusão de fontees personalizadas --><link id="style" rel="stylesheet" type="text/css" href="assets/css/style.css"><link id="home" rel="stylesheet" type="text/css" href="assets/css/home.css"><script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script></head><body class="d-flex flex-column h-100 bg-white"><header id="header" class="shadow z-index-2"></header><main id="home" class="main flex-shrink-0"><section id="treat" class="position-relative z-index-1 col-12"><div class="container-treat container px-0 mt-0 mt-md-5 pt-5 pb-5"><div class="row row-treat"><div id="treat-text-area" class="position-relative geral-text-area col-lg-12 col-xl-6 align-items-center px-4 px-md-0 pe-md-5"><h1 class="font-title color-black font-destaque weight-bold" id="text26">Precisa de nossa ajuda?</h1><p class="font-text area-text font-destaque-little color-black" id="text27">Sempre que precisar de ajuda, a equipe SpaceCode estará disponível para ajudar-lhe, basta contatar-nos através do botão abaixo.</p><p class="area-btn d-md-block"><a class="btn btn-lg btn-secundary" id="text28" href="https://www.hospitalmoriah.com.br/cirurgia-robotica/">Contate-nos</a></p></div><div id="treat-img-area2" class="position-relative col-lg-12 col-xl-6 px-0 px-md-4 px-md-0 ps-md-5 pt-5 pt-md-0"><picture><source srcset="assets/img/prevencao-e-rastreio/tratar+.jpg" media="(min-width: 1400px)"><img class="treat-img d-block mt-0 mt-md-3" src="assets/img/contato/contato.jpg" alt="background"></picture></div></div></div></section><section id="sectors" class="z-index-1 position-relative col-12"><div class="container-sectors pt-5"><div class="row"><div id="sectors-1" class="sector position-relative col-sm-12 col-lg-4 px-4 px-md-5 py-5 pe-md-5"><h3 class="font-title-white font-destaque title-sectors weight-light" id="text29">LOCALIZAÇÃO ERRADA</h3><p class="font-text-white text-sectors" id="text30">Ao marcar o local de entrega e troca de seu livro com o usuário, certifique-se de conferir a localização escolhida, afim de confirmar se esta é a desejada por ambas as partes.</p></div><div id="sectors-2" class="sector position-relative col-sm-12 col-lg-4 px-4 px-md-5 py-5 pe-md-5"><h3 class="font-title-white font-destaque title-sectors weight-light" id="text31">ABUSO</h3><p class="font-text-white text-sectors" id="text32">Denuncie insultos e usuários desrespeitosos para nossa equipe tomar as devidas providências, para que possamos manter o a boa convivência em nosso site.</p></div><div id="sectors-3" class="sector position-relative col-sm-12 col-lg-4 px-4 px-md-5 py-5 pe-md-5"><h3 class="font-title-white font-destaque title-sectors weight-bold" id="text33">USUARIO SUSPEITO</h3><p class="font-text-white text-sectors" id="text34">Fique atento com golpes e conversas suspeitas de usuários, caso desconfie, contate nossa equipe através de nosso e-mail para que possamos fazer uma verificação, mantendo nossos usuários em segurança.</p></div></div></div></section><section class="container-img-total"><picture><source srcset="assets/img/contato/lendo.jpg" media="(min-width: 900px)"><img class="img-total" src="assets/img/contato/lendo.jpg" alt="background"></picture></section></main><footer id="footer"><div class="container"></div></footer><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script><script src="https://kit.fontawesome.com/6500806379.js" crossorigin="anonymous"></script><script id="dist" src="assets/js/dist.min.js"></script><script>$(function() {
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
        document.getElementById('dist').src = resourcePath2 + '?v=' + Date.now();</script></body></html>