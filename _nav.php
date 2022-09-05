<?php
    session_start();
?>
<div class="container">

    <nav class="navbar navbar-expand-lg p-lg-0" aria-label="Eighth navbar example">
        <div id="second-part">
            <div class="row container-full-hd justify-content-between"><a class="navbar-brand position-relative p-0 col-9 col-xxl-5 col-lg-12 d-flex align-items-center" href="index.html"><img id="logo" class="img-fluid" src="assets/img/logo-trocabook.png"> </a><button class="navbar-toggler z-index-1 col-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="true" aria-label="Toggle navigation"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" class="d-block icon-menu ms-auto me-3" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" fill="#834816"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M492,76H20C8.954,76,0,84.954,0,96s8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,76,492,76z" fill="#834816"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M492,396H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20    C512,404.954,503.046,396,492,396z" fill="#834816"></path>
                            </g>
                        </g>
                    </svg></button>
                <div class="collapse navbar-collapse col-8" id="navbarsExample07">
                    <hr>
                    <ul class="navbar-nav position-relative d-flex justify-content-evenly m-auto w-100 font-menu pb-4">
                        <li class="nav-item m-auto"><a class="nav-link active fs-6" aria-current="page" id="text35" href="index.html">Início</a></li>
                        <li class="nav-item m-auto"><a class="nav-link fs-6" href="_ajuda.php" id="text36">Contato</a></li>
                        <li class="nav-item m-auto"><a class="nav-link fs-6" id="text37" href="_feed.php">Feed</a></li>
                        <?php
                            if($_SESSION['id']){
                                echo "<li class='nav-item m-auto'><a class='nav-link fs-6' id='text38' href='_perfil.php'>Meu perfil</a></li>";
                            }
                        ?>
                        <a id="btn-desktop" class="btn btn-lg btn-nav font-menu" href="_login.php" onclick="unset($_SESSION['id'])"><?php if($_SESSION['id']) echo "Sair"; else echo "Login";?></a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="tab-inv"><a class="link-idioma" href="#por" data-reload>Português</a> <a class="link-idioma" href="#esp" data-reload>Espanhol</a> <a class="link-idioma" href="#eng" data-reload>Inglês</a></div>
</div>
<script>
    var dataReload = document.querySelectorAll("a[data-reload]");
    var text1 = document.getElementById("text1");
    var language = {
        por: {
            writing: "Olá, Seja bem-vindo(a)!"
        },
        eng: {
            writing: "Hello, welcome!"
        },

        esp: {
            writing: "Hola, bienvenido!"
        }

    };

    var text2 = document.getElementById("text2");
    var language1 = {
        por: {
            writing1: "Temos como missão despertar um maior interesse em nossos usuários, levando-os a conhecer mais sobre a literatura. Nossa rede de compartilhamento literário, permitirá que os utilizadores compartilhem e recomendem suas leituras, avaliando-as e realizando postagens sobre suas experiências."
        },
        eng: {
            writing1: "Our mission is to arouse greater interest in our users, leading them to know more about the literature. Our literary sharing network will allow users to share and recommend their readings, rating them and making posts about their experiences."
        },

        esp: {
            writing1: "Nuestra misión es despertar un mayor interés en nuestros usuarios, llevándolos a aprender más sobre la literatura. Nuestra red de intercambio literario permitirá a los usuarios compartir y recomendar sus lecturas, evaluarlas y publicar sobre su experiencia."
        }

    };
    var text3 = document.getElementById("text3");
    var language2 = {
        por: {
            writing2: "Saiba Mais"
        },
        eng: {
            writing2: "Know more"
        },

        esp: {
            writing2: "Sepa mas"
        }

    };

    var text4 = document.getElementById("text4");
    var language3 = {
        por: {
            writing3: "INTERAÇÃO"
        },
        eng: {
            writing3: "INTERACTION"
        },

        esp: {
            writing3: "INTERACCIÓN"
        }

    };
    var text5 = document.getElementById("text5");
    var language4 = {
        por: {
            writing4: "Nosso sistema permite a comunicação entre usuários por meio de interações em suas postagens e perfis, recebendo comentários, feedbacks e curtidas."
        },
        eng: {
            writing4: "Our software allows communication between users through interactions on their posts and profiles, receiving comments, feedback's and likes."
        },

        esp: {
            writing4: "Nuestro sistema permite la comunicación entre los usuarios a través de interacciones en sus publicaciones y perfiles, recibiendo comentarios, comentarios y 'me gusta'"
        }

    };
    var text6 = document.getElementById("text6");
    var language5 = {
        por: {
            writing5: "LIVROS"
        },
        eng: {
            writing5: "BOOKS"
        },

        esp: {
            writing5: "LIBROS"
        }

    };
    var text7 = document.getElementById("text7");
    var language6 = {
        por: {
            writing6: "Oferecemos o compartilhamento e indicações literárias de forma inovadora e descontraída por meio da plataforma."
        },
        eng: {
            writing6: "We offer sharing and literary indications in an innovative and relaxed way through the platform."
        },

        esp: {
            writing6: "Ofrecemos intercambios e indicaciones literarias de una manera innovadora y relajada a través del plataforma"
        }

    };

    var text8 = document.getElementById("text8");
    var language7 = {
        por: {
            writing7: "TROCA"
        },
        eng: {
            writing7: "SWAP"
        },

        esp: {
            writing7: "CAMBIO"
        }

    };
    var text9 = document.getElementById("text9");
    var language8 = {
        por: {
            writing8: "Utilizando o compartilhamento literário, o usuário terá interatividades com o Chat por meio de diálogos que servirão para planear a troca de livros."
        },
        eng: {
            writing8: "Using literary sharing, the user will interact with the Chat through dialogues that will be used to plan the exchange of books."
        },

        esp: {
            writing8: "Utilizando el intercambio literario, el usuario tendrá interactividad con Chat a través de diálogos que servirán para planificar el intercambio de libros."
        }

    };
    var text10 = document.getElementById("text10");
    var language9 = {
        por: {
            writing9: "AVALIAÇÃO"
        },
        eng: {
            writing9: "RATING"
        },

        esp: {
            writing9: "VALORACIÓN"
        }

    };
    var text11 = document.getElementById("text11");
    var language10 = {
        por: {
            writing10: "Expansão de nichos bibliográficos e a aquisição de maior disposição na participação referente a avaliação coletiva entre nossos usuários."
        },
        eng: {
            writing10: "Expansion of bibliographic niches and the acquisition of greater disposition in collective participation among our users."
        },

        esp: {
            writing10: "Expansión de nichos bibliográficos y adquisición de una mayor voluntad en la participación colectiva de nuestros usuarios."
        }

    };

    var text12 = document.getElementById("text12");
    var language11 = {
        por: {
            writing2: "Saiba Mais"
        },
        eng: {
            writing2: "Know more"
        },

        esp: {
            writing2: "Sepa mas"
        }

    };
    var text13 = document.getElementById("text13");
    var language12 = {
        por: {
            writing12: "TrocaBook"
        },
        eng: {
            writing12: "TrocaBook"
        },

        esp: {
            writing12: "TrocaBook"
        }

    };
    var text14 = document.getElementById("text14");
    var language13 = {
        por: {
            writing13: "A literatura é pouco requisitada pelas novas gerações, que tem o costume de buscar por soluções rápida para problemas corriqueiros.Assim, não possuindo interesse no esforço maior de procurar uma solução e em buscar a compreensa de todo o contexto. Desse modo, as pessoas que já possuíam contato com a literatura, tendem a continuar seus hábitos, enquanto as novas gerações tendem a diminui-los.<br> A plataforma TrocaBook consiste em uma rede social para o compartilhamento de recomendações e nichos bibliográficos para troca entre usuários, assim proporcionando novas experiências literárias aos utilizadores."
        },
        eng: {
            writing13: "Literature is little requested by the new generations, who have the habit of looking for quick solutions to common problems. Thus, having no interest in the greater effort of looking for a solution and in seeking to understand the whole context. In this way, people who already had contact with literature tend to continue their habits, while the new generations tend to decrease them. The TrocaBook platform consists of a social network for sharing recommendations and bibliographic niches for exchange between users, thus providing new literary experiences to users."
        },

        esp: {
            writing13: "La literatura es poco solicitada por las nuevas generaciones, que tienen la costumbre de buscar soluciones rápidas a los problemas cotidianos. Por lo tanto, no tener interés en el mayor esfuerzo por buscar una solución y buscar la comprensión de todo el contexto. Por lo tanto, las personas que ya tenían contacto con la literatura tienden a continuar con sus hábitos, mientras que las nuevas generaciones tienden a disminuirlos."
        }

    };
    var text15 = document.getElementById("text15");
    var language14 = {
        por: {
            writing14: "Comentários de pesquisa"
        },
        eng: {
            writing14: "Research Comments"
        },

        esp: {
            writing14: "Comentarios de la Investigación"
        }

    };

    var text16 = document.getElementById("text16");
    var language15 = {
        por: {
            writing15: "[...] Deixar de ler é como negar nossas raizes e desconhecer grande parte da nossa história [...]"
        },
        eng: {
            writing15: " [...] Failing to read is like denying our roots and ignoring a large part of our history [...]"
        },

        esp: {
            writing15: "[...] No leer es como negar nuestras raíces y no saber mucho de la historia [...]"
        }

    };
    var text17 = document.getElementById("text17");
    var language16 = {
        por: {
            writing16: "[...] A internet e suas aplicações sociais impactam profundamente no interesse pela leitura [...]"
        },
        eng: {
            writing16: "[...] The internet and its social applications have a profound impact on the interest in reading [...]"
        },
        esp: {
            writing16: "[...] La internet y sus aplicaciones sociales tienen un profundo impacto en el interés por leer [...]"
        }

    };
    var text18 = document.getElementById("text18");
    var language17 = {
        por: {
            writing17: "Favoritos"
        },
        eng: {
            writing17: "Favorites"
        },

        esp: {
            writing17: "Favoritos"
        }

    };
    var text19 = document.getElementById("text19");
    var language18 = {
        por: {
            writing18: "Para Doação"
        },
        eng: {
            writing18: "For donation"
        },

        esp: {
            writing18: "Para donar"
        }

    };

    var text20 = document.getElementById("text20");
    var language19 = {
        por: {
            writing19: "2022 © TrocaBook. Todos os direitos reservados. |"
        },
        eng: {
            writing19: "2022 © TrocaBook. All rights reserved. |"
        },

        esp: {
            writing19: "2022 © TrocaBook. Todos los derechos reservados. |"
        }

    };
    var text21 = document.getElementById("text21");
    var language20 = {
        por: {
            writing20: "Política de Privacidade"
        },
        eng: {
            writing20: "Privacy Policy"
        },

        esp: {
            writing20: "Política de privacidad"
        }

    };
    var text22 = document.getElementById("text22");
    var language21 = {
        por: {
            writing21: "Qual livro gostaria de compartilhar?"
        },
        eng: {
            writing21: "Which book would you like to share?"
        },

        esp: {
            writing21: "¿Qué libro te gustaría compartir?"
        }

    };
    var text23 = document.getElementById("text23");
    var language22 = {
        por: {
            writing22: "Adicione uma imagem"
        },
        eng: {
            writing22: "Add Image"
        },

        esp: {
            writing22: "Añadir una imagen"
        }

    };

    var text24 = document.getElementById("text24");
    var language23 = {
        por: {
            writing23: "Postar"
        },
        eng: {
            writing23: "Post"
        },

        esp: {
            writing23: "Para publicar"
        }

    };
    var text25 = document.getElementById("text25");
    var language24 = {
        por: {
            writing24: "Digite uma mensagem"
        },
        eng: {
            writing24: "Type your message here"
        },

        esp: {
            writing24: "Introduce tu mensaje aquí"
        }

    };
    var text26 = document.getElementById("text26");
    var language25 = {
        por: {
            writing25: "Precisa de nossa ajuda?"
        },
        eng: {
            writing25: "Need help?"
        },

        esp: {
            writing25: "¿Necesitas nuestra ayuda?"
        }

    };
    var text27 = document.getElementById("text27");
    var language26 = {
        por: {
            writing26: "Sempre que precisar de ajuda, a equipe SpaceCode estará disponível para ajudar-lhe, basta contatar-nos através do botão abaixo."
        },
        eng: {
            writing26: "Whenever you need help, the SpaceCode team will be available to help you, just contact us using the button below."
        },

        esp: {
            writing26: "Siempre que necesite ayuda, el equipo de SpaceCode estará disponible para ayudarle, simplemente póngase en contacto con nosotros utilizando el botón de abajo."
        }

    };

    var text28 = document.getElementById("text28");
    var language27 = {
        por: {
            writing27: "Contate-nos"
        },
        eng: {
            writing27: "Contact Us"
        },

        esp: {
            writing27: "Contacto con Nosostros "
        }

    };
    var text29 = document.getElementById("text29");
    var language28 = {
        por: {
            writing28: "LOCALIZAÇÃO ERRADA"
        },
        eng: {
            writing28: "WRONG LOCATION"
        },

        esp: {
            writing28: "UBICACIÓN INCORRECTA"
        }

    };
    var text30 = document.getElementById("text30");
    var language29 = {
        por: {
            writing29: "Ao marcar o local de entrega e troca de seu livro com o usuário, certifique-se de conferir a localização escolhida, afim de confirmar se esta é a desejada por ambas as partes."
        },
        eng: {
            writing29: "When arranging the delivery and exchange location of your book with the user, be sure to check the location chosen, in order to confirm that this is the one desired by both parties."
        },

        esp: {
            writing29: "Al marcar el lugar de entrega e intercambio de su libro con el usuario, asegúrese de comprobar la ubicación elegida para confirmar que esta es la deseada por ambas partes."
        }

    };
    var text31 = document.getElementById("text31");
    var language30 = {
        por: {
            writing30: "ABUSO"
        },
        eng: {
            writing30: "ABUSE"
        },

        esp: {
            writing30: "MALTRATO"
        }

    };

    var text32 = document.getElementById("text32");
    var language31 = {
        por: {
            writing31: "Denuncie insultos e usuários desrespeitosos para nossa equipe tomar as devidas providências, para que possamos manter o a boa convivência em nosso site."
        },
        eng: {
            writing31: "Report insults and disrespectful users for our team to take appropriate action, so that we can maintain good coexistence on our site. "
        },

        esp: {
            writing31: "Informar de insultos y usuarios irrespetuosos para que nuestro equipo tome las medidas adecuadas, de modo que podamos mantener una buena coexistencia en nuestra plataforma."
        }

    };
    var text33 = document.getElementById("text33");
    var language32 = {
        por: {
            writing32: "USUARIO SUSPEITO"
        },
        eng: {
            writing32: "SUSPICIOUS USER"
        },

        esp: {
            writing32: "USUARIO SOSPECHOSO"
        }

    };
    var text34 = document.getElementById("text34");
    var language33 = {
        por: {
            writing33: "Fique atento com golpes e conversas suspeitas de usuários, caso desconfie, contate nossa equipe através de nosso e-mail para que possamos fazer uma verificação, mantendo nossos usuários em segurança."
        },
        eng: {
            writing33: "Stay tuned with scans and suspicious contacts from users, if you suspect, contact our team through our email so we can do a check, keeping our users safe. "
        },

        esp: {
            writing33: "Estén atentos a las estafas y conversaciones sospechosas de los usuarios, si lo sospecha, póngase en contacto con nuestro equipo a través de nuestro correo electrónico para que podamos hacer un cheque, manteniendo a nuestros usuarios seguros."
        }

    };
    var text35 = document.getElementById("text31");
    var language34 = {
        por: {
            writing34: "Início"
        },
        eng: {
            writing34: "Home"
        },

        esp: {
            writing34: "Início"
        }

    };

    var text36 = document.getElementById("text32");
    var language35 = {
        por: {
            writing35: "Contato"
        },
        eng: {
            writing35: "Contact"
        },

        esp: {
            writing35: "Contacto"
        }

    };
    var text37 = document.getElementById("text33");
    var language36 = {
        por: {
            writing36: "Feed"
        },
        eng: {
            writing36: "Feed"
        },

        esp: {
            writing36: "Feed"
        }

    };
    var text38 = document.getElementById("text34");
    var language37 = {
        por: {
            writing37: "Meu perfil"
        },
        eng: {
            writing37: "My profile"
        },

        esp: {
            writing37: "Mi Perfil"
        }

    };
    var setLanguage = () => {

        if (window.location.hash === "#por") {
            text1.textContent = language.por.writing;
            text2.textContent = language1.por.writing1;
            text3.textContent = language2.por.writing2;
            text4.textContent = language3.por.writing3;
            text5.textContent = language4.por.writing4;
            text6.textContent = language5.por.writing5;
            text7.textContent = language6.por.writing6;
            text8.textContent = language7.por.writing7;
            text9.textContent = language8.por.writing8;
            text10.textContent = language9.por.writing9;
            text11.textContent = language10.por.writing10;
            text12.textContent = language11.por.writing11;
            text13.textContent = language12.por.writing12;
            text14.textContent = language13.por.writing13;
            text15.textContent = language14.por.writing14;
            text16.textContent = language15.por.writing15;
            text17.textContent = language16.por.writing16;
            text18.textContent = language17.por.writing17;
            text19.textContent = language18.por.writing18;
            text20.textContent = language19.por.writing19;
            text21.textContent = language20.por.writing20;
            text22.textContent = language21.por.writing21;
            text23.textContent = language22.por.writing22;
            text24.textContent = language23.por.writing23;
            text25.textContent = language24.por.writing24;
            text26.textContent = language25.por.writing25;
            text27.textContent = language26.por.writing26;
            text28.textContent = language27.por.writing27;
            text29.textContent = language28.por.writing28;
            text30.textContent = language29.por.writing29;
            text31.textContent = language30.por.writing30;
            text32.textContent = language31.por.writing31;
            text33.textContent = language32.por.writing32;
            text34.textContent = language33.por.writing33;
            text35.textContent = language34.por.writing34;
            text36.textContent = language35.por.writing35;
            text37.textContent = language36.por.writing36;
            text38.textContent = language37.por.writing37;
        } else if (window.location.hash === "#esp") {
            text1.textContent = language.esp.writing;
            text2.textContent = language1.esp.writing1;
            text3.textContent = language2.esp.writing2;
            text4.textContent = language3.esp.writing3;
            text5.textContent = language4.esp.writing4;
            text6.textContent = language5.esp.writing5;
            text7.textContent = language6.esp.writing6;
            text8.textContent = language7.esp.writing7;
            text9.textContent = language8.esp.writing8;
            text10.textContent = language9.esp.writing9;
            text11.textContent = language10.esp.writing10;
            text12.textContent = language11.esp.writing11;
            text13.textContent = language12.esp.writing12;
            text14.textContent = language13.esp.writing13;
            text15.textContent = language14.esp.writing14;
            text16.textContent = language15.esp.writing15;
            text17.textContent = language16.esp.writing16;
            text18.textContent = language17.esp.writing17;
            text19.textContent = language18.esp.writing18;
            text20.textContent = language19.esp.writing19;
            text21.textContent = language20.esp.writing20;
            text22.textContent = language21.esp.writing21;
            text23.textContent = language22.esp.writing22;
            text24.textContent = language23.esp.writing23;
            text25.textContent = language24.esp.writing24;
            text26.textContent = language25.esp.writing25;
            text27.textContent = language26.esp.writing26;
            text28.textContent = language27.esp.writing27;
            text29.textContent = language28.esp.writing28;
            text30.textContent = language29.esp.writing29;
            text31.textContent = language30.esp.writing30;
            text32.textContent = language31.esp.writing31;
            text33.textContent = language32.esp.writing32;
            text34.textContent = language33.esp.writing33;
            text35.textContent = language34.esp.writing34;
            text36.textContent = language35.esp.writing35;
            text37.textContent = language36.esp.writing36;
            text38.textContent = language37.esp.writing37;
        } else {
            text1.textContent = language.eng.writing;
            text2.textContent = language1.eng.writing1;
            text3.textContent = language2.eng.writing2;
            text4.textContent = language3.eng.writing3;
            text5.textContent = language4.eng.writing4;
            text6.textContent = language5.eng.writing5;
            text7.textContent = language6.eng.writing6;
            text8.textContent = language7.eng.writing7;
            text9.textContent = language8.eng.writing8;
            text10.textContent = language9.eng.writing9;
            text11.textContent = language10.eng.writing10;
            text12.textContent = language11.eng.writing11;
            text13.textContent = language12.eng.writing12;
            text14.textContent = language13.eng.writing13;
            text15.textContent = language14.eng.writing14;
            text16.textContent = language15.eng.writing15;
            text17.textContent = language16.eng.writing16;
            text18.textContent = language17.eng.writing17;
            text19.textContent = language18.eng.writing18;
            text20.textContent = language19.eng.writing19;
            text21.textContent = language20.eng.writing20;
            text22.textContent = language21.eng.writing21;
            text23.textContent = language22.eng.writing22;
            text24.textContent = language23.eng.writing23;
            text25.textContent = language24.eng.writing24;
            text26.textContent = language25.eng.writing25;
            text27.textContent = language26.eng.writing26;
            text28.textContent = language27.eng.writing27;
            text29.textContent = language28.eng.writing28;
            text30.textContent = language29.eng.writing29;
            text31.textContent = language30.eng.writing30;
            text32.textContent = language31.eng.writing31;
            text33.textContent = language32.eng.writing32;
            text34.textContent = language33.eng.writing33;
            text35.textContent = language34.eng.writing34;
            text36.textContent = language35.eng.writing35;
            text37.textContent = language36.eng.writing36;
            text38.textContent = language37.eng.writing37;
        }

    }

    for (i = 0; i < dataReload.length; i++) {
        dataReload[i].onclick = function(e) {
            window.location.hash = this.getAttribute("href");
            setLanguage();
        }
    }

    setLanguage();
</script>