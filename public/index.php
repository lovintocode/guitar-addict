<?php

    /*
        Las Operaciones se gestionan todas desde aquí "index.php"

        Se enlaza con la página de "bdd-funciones" donde se ejecutan las operaciones en la bbdd.

        Incluye los archivos ".php" que tienen las funciones de éste archivo. (Ej : indexFile.php -> imprimirArtIndex())

    */

    require "php/bbdd-funciones.php";

    // Comprueba la navegación de las páginas
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch($page){
            case 1 : include "php/indexFile.php";
        break;
            case 2 : include "php/recienteFile.php";
        break;
            case 3 : include "php/popularFile.php";
        break;
            case 4 : include "php/supportFile.php";
        break;
        }
    }else{
        include "php/indexFile.php";
    }

    /* Imprime todos los artículos de la bbdd en la tabla "articulos_index" */
    function imprimirArtIndex(){
        $articulos = getArticles("articulos_index");
        
        echo "<section class='left'>";
        for($i=0;$i<sizeof($articulos);$i++){
            $img_ext = trim($articulos[$i]->getImage());

            // Si la extensión es jpg muestra una imágen
            // Si es mp4 muestra un video
            if(substr($img_ext, -3) === 'jpg') $recurso = "<img class='art-imagen' src='https://imagehost-f75ac.web.app/".$articulos[$i]->getImage()."' alt='imagen'>";
            else if(substr($img_ext, -3) === 'mp4') 
            $recurso = "<video class='art-video' controls>
            <source src='https://imagehost-f75ac.web.app/".$articulos[$i]->getImage()."' type='video/mp4'>
            Your browser does not support HTML5 video.
            </video>";

            echo "
            <article class='articulo art-1'>
                <h3 class='art-titulo'>
                    ".$articulos[$i]->getTitulo()."
                </h3>
                <p class='art-fecha'>
                    ".$articulos[$i]->getFecha()."
                </p>
                ".$recurso."
                <p class='art-texto'>
                    ".$articulos[$i]->getTexto()."
                </p>
                <p class='art-autor'>
                    <b>Autor : </b> ".$articulos[$i]->getAutor()."
                </p>
                <a class='art-compartir' href='#'><img src='https://imagehost-f75ac.web.app/share.png' alt='share'></a>
                <a class='art-comentar' href='#'><img src='https://imagehost-f75ac.web.app/comment.png' alt='comment'></a>
            </article>";
           
        }
        echo "</section>";
        
    }

    // Imprime los artículos de interés de la bbdd de la tabla "articulos_interes"
    function imprimirArtInt(){
        $articulos = getArticles("articulos_interes");
        echo "<section class='right'>";
        for($i=0;$i<sizeof($articulos);$i++){
            echo "
            <article class='articulo-interes'>
                <h4 class='titulo-interes'>
                    ".$articulos[$i]->getTitulo()."
                </h4>
                <img class='imagen-interes' src='https://imagehost-f75ac.web.app/".$articulos[$i]->getImage()."' alt=''>
                <p class='texto-interes'>".$articulos[$i]->getTexto()."</p>
            </article>";
        }
        echo "</section>";
    }

    // Imprime los artículos recientes de la bbdd de la tabla "artículos_recientes"
    function imprimirArtReciente(){
        $articulos = getArticles("articulos_recientes");
        for($i=0;$i<sizeof($articulos);$i++){
            echo "
            <article class='articulo'>
                <img class='art-imagen' src='https://imagehost-f75ac.web.app/".$articulos[$i]->getImage()."' alt=''>
                <h3 class='art-titulo'>".$articulos[$i]->getTitulo()."</h3>
                <p class='art-fecha'>".$articulos[$i]->getFecha()."</p>
                <p class='art-texto'>".$articulos[$i]->getTexto()."</p>
                <p class='art-autor'>
                    <b>Autor : </b> ".$articulos[$i]->getAutor()."
                </p>
                <a class='art-compartir' href='#'><img src='https://imagehost-f75ac.web.app/share.png' alt='share'></a>
                <a class='art-comentar' href='#'><img src='https://imagehost-f75ac.web.app/comment.png' alt='comment'></a>
            </article>
            ";
        }
    }
    
    // Imprime los artículos populares de la bbdd de la tabla "artículos_populares"
    
    // Hay un sistema de contador con un booleano para incluir secciones cada 3 artículos
    // Si la sección cuenta con 1 o 2 artículos la cierra automáticamente
    function imprimirArtPopular(){
        $articulos = getArticles("articulos_populares");
        $contador = 1;
        $cerrada = false;
        for($i=0;$i<sizeof($articulos);$i++){
            $cerrada = false;
            if($contador == 1 ) echo "<section class='section'>";     

            echo "
            <article class='articulo-".$contador."'>
                <h2 class='art-titulo'>".$articulos[$i]->getTitulo()."</h2>
                <img class='art-imagen' src='https://imagehost-f75ac.web.app/".$articulos[$i]->getImage()."' alt=''>
                <p class='art-texto'>
                ".$articulos[$i]->getTexto()."
                </p>
                <p class='art-autor'><b>Autor : </b>".$articulos[$i]->getAutor()."</p>
                <p class='art-fecha'>".$articulos[$i]->getFecha()."</p>
            </article>
            ";
            if($contador == 3){
                $contador = 0;
                echo "</section>";
                $cerrada = true;
            } 
            $contador++;
        }
        if(!$cerrada) echo "</section>"; 
    }
?>