<?php

    /*  
        Página operaciones bbdd

        Require la clase Conexion y la clase Artículo para gestionar la bbdd mediante "objetos"

        Las imágenes están hosteadas 
    */
    require "conexion.php";
    require "articulo.php";


    function getArticles($table_name){
        $articulos = [];
        $conexion_ini = new Conexion();
        $conexion = $conexion_ini->getConector();
        if($conexion){
            $consulta = "SELECT * FROM $table_name";
            $stmt = $conexion->prepare($consulta, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute();
            while($campo = $stmt->fetch(PDO::FETCH_ASSOC)){
                $articulo = unserialize($campo['barticulo']);
                $articulo->setCodigo($campo['ncodigo']);
                array_push($articulos, $articulo);
            }
            $stmt->closeCursor();
            $conexion_ini->cerrar();
        }
        return $articulos;
    }
    function addArticle( $titulo, $fecha, $img_path, $texto, $autor){
        echo "works";
        $articulo = new Articulo($titulo,$fecha , $img_path, $texto, $autor);
        $serialized = serialize($articulo);
        $conexion_ini = new Conexion();
        $conexion = $conexion_ini->getConector();
        if($conexion){
            $consulta = "INSERT INTO articulos_populares (barticulo) VALUES (:articulo)";
            $stmt = $conexion->prepare($consulta, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute(array(':articulo' => $serialized));
            $stmt->closeCursor();
            $conexion_ini->cerrar();
        }
    }
?>
   