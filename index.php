<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css_general.css">
    <link rel="stylesheet" href="css/css_index.css">
    <link rel="icon" href="images/logo.jpg">
</head>
<body>
    <!-- Navegacion -->
    <nav class='nav'>
        <ul class='nav-list'>
            <li class='nav-image'><a href='index.html'><img src="images/logo.jpg" alt=""></a></li>
            <li class='nav-item'><a href="reciente.html">Más reciente</a></li>
            <li class='nav-item'><a href="popular.html">Popular</a></li>
            <li class='nav-item nav-item-right'><a href="support.html">Soporte</a></li>
        </ul>
    </nav>
    <!-- Fin Navegacion -->
    <!-- Container -->
    <div class='container'>
        <!-- Header -->
        <header class='header'>
            <h1>Guitar Addict</h1>
        </header>
        <!-- Fin Header -->
        <!-- Left Section -->
        <section class='left'>
            <?php
                require 'process.php';
                imprimir_articulos();
            ?>
            <article class='articulo art-1'>
                <h3 class='art-titulo'>
                    Vendo guitarra Dean Guitars ML 79F TB
                </h3>
                <p class='art-fecha'>
                    15-08-2020
                </p>
                <img class='art-imagen' src="images/art_1.jpg" alt="">
                <p class='art-texto'>
                    Es muy acccesible a los trastes más altos pudiendose abarcar nueve trastes en la sexta cuerda sin tanta dificultad como en otros modelos de guitarra. La acción es muy ajustable y no da problemas de trasteo a bajas alturas. En definitiva es muy comoda al tacto, y resulta blanda a la hora de hacer bendings.

                    Su sonido es muy amplio, y aunque en general goza de un gran cuerpo, se pueden conseguir sonidos desde los desgarrados de Pantera y Zack Wilde a los mas bluseros de Gary Moore o Radio Moscow; limpios claros y agradables y sucios conttundente. Las pastillas ofrecen mucha ganancia observandose un bajo humbral de ruido.
                </p>
                <p class='art-autor'>
                    <b>Autor : </b> GuitarAddict
                </p>
                <a class='art-compartir' href="#"><img src="images/share.png" alt="share"></a>
                <a class='art-comentar' href="#"><img src="images/comment.png" alt="comment"></a>
            </article>
            <article class='articulo'>
                <h3 class='art-titulo'>
                    Solo Nothing Else Matters by Samantita-86
                </h3>
                <p class='art-fecha'>
                    18-07-2020
                </p>
                <video class='art-video' poster="images/video.jpg" controls>
                    <source src="videos/video.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
               
                <p href='#' class='art-texto'>
                    Nothing Else Matters es definitivamente una de las mejores canciones acústicas de Metallica ... espera, ¿hay otra canción acústica de Metallica? Haré mi investigación, pero mientras tanto, ¡aprenderé a hacer trizas este increíble solo de una canción clásica de metal!
                </p>
                <p class='art-autor'>
                    <b>Autor : </b> GuitarAddict
                </p>
                <a class='art-compartir' href="#"><img src="images/share.png" alt="share"></a>
                <a class='art-comentar' href="#"><img src="images/comment.png" alt="comment"></a>
            </article>
            <article class='articulo'>
                <h3 class='art-titulo'>
                    Busco modelo de guitarra por foto
                </h3>
                <p class='art-fecha'>
                    01-07-2020
                </p>
                <img class='art-imagen' src="images/art_2.jpg" alt="">
                <p class='art-texto'>
                    Buenas a todos,
                    Tengo la foto de una guitarra pero no tengo ni idea de cual es el modelo. ¿ Alguien tiene idea de cual puede ser ?
                </p>
                <p class='art-autor'>
                    <b>Autor : </b> GuitarAddict
                </p>
                <a class='art-compartir' href="#"><img src="images/share.png" alt="share"></a>
                <a class='art-comentar' href="#"><img src="images/comment.png" alt="comment"></a>
            </article>
            <article class='articulo'>
                <h3 class='art-titulo'>
                    Artículo reflexivo guitarril
                </h3>
                <p class='art-fecha'>
                    28-04-2020
                </p>
                <img class='art-imagen' src="images/art_3.jpg" alt="">
                <p class='art-texto'>
                    Subo un artículo para leer y reflexionar sobre las guitarras y la filosofalidad que aportan al alma.

                    Link del artículo : <a href="http://www.scielo.org.co/scielo.php?script=sci_arttext&pid=S0124-61272006000100013" target='_blank'>Artículo</a>
                </p>
                <p class='art-autor'>
                    <b>Autor : </b> GuitarAddict
                </p>
                <a class='art-compartir' href="#"><img src="images/share.png" alt="share"></a>
                <a class='art-comentar' href="#"><img src="images/comment.png" alt="comment"></a>
            </article>
        </section>
        <!-- Fin Left Section -->
        <!-- Right Section-->
        <section class='right'>
            <article class='articulo-interes'>
                <h4 class='titulo-interes'>
                    Aprendiendo solos
                </h4>
                <img class='imagen-interes' src="images/int_1.jpg" alt="">
                <p class='texto-interes'>Me encantan los solos como a cualquiera pero a veces es jodido intentar sacarlos y te preguntas que falla ?
<br><br>
                No temáis más, aquí dejo un artículo para mejorar.
<br><br>
                Link al <a href="https://www.rockandrollparamunones.com/escala-pentatonica/543-escalas-solos-guitarra">Artículo</a></p>
            </article>
            <article class='articulo-interes'>
                <h4 class='titulo-interes'>
                    Eléctricas vs Acústicas
                </h4>
                <img class='imagen-interes' src="images/int_2.jpg" alt="">
                <p class='texto-interes'>La eterna batalla, yo siempre he optado por usar las dos depeniendo del ambiente y lo que apetezca en el momento.
<br><br>
                    Que opináis de cada una de ellas y cuál es la que más os gusta ?</p>
            </article>
            <article class='articulo-interes'>
                <h4 class='titulo-interes'>
                    Guitarra y playa
                </h4>
                <img class='imagen-interes' src="images/int_3.jpg" alt="">
                <p class='texto-interes'>Se viene el veranito y no hay nada mas poético que tocar la guitarra en la playa, magnetizando gente.
<br><br>
                    Ahora mi consulta: ¿que opinais de una guitarra sometida al viento, arena, ocasional lluvia, traslados, potencial choreo... ?
                </p>
            </article>
            <article class='articulo-interes'>
                <h4 class='titulo-interes'>
                    Concierto Post-Covid
                </h4>
                <img class='imagen-interes' src="images/int_4.jpg" alt="">
                <p class='texto-interes'>La enfermedad nos ataca y también a nuestros artistas. ¿A que conciertos os molaría ir cuando se despeje todo ?</p>
            </article>
            
        </section>
        <!-- Fin Right Section -->
        <!-- Footer -->
        <footer class='footer'>
            <p class='social-text'>
                La página se encuentra en desarrollo madafakas pero hay cosas de guitarra guapísimas para solear y tener una vida feliz por fin.
            </p>
            <ul class='footer-social'>
                
                <li class='social-item'><a href=""><img src="images/facebook.png" alt=""></a>
                </li>
                <li class='social-item'><a href=""><img src="images/instagram.png" alt=""></a>
                </li>
                <li class='social-item'><a href=""><img src="images/twitter.png" alt=""></a>
                </li>
            </ul>
            <ul class='footer-links'>
                <h2>Links</h2>
                <a href="#">www.playmyguitar.com</a>
                <a href="#">wwww.affinity.com</a>
                <a href="#">www.unrustyoursting.com</a>
            </ul>
            <ul class='footer-about'>
                <h2>Sobre mí</h2>
                <a href="#">Soporte</a>
                <a href="#">Quién soy</a>
                <a href="#">Copyright</a>
            </ul>
            <p class='footer-copy'></p>
        </footer>
        <!-- Fin Footer -->
    </div>
    <!-- Fin Container-->
</body>
</html>