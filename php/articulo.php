<?php

    class Articulo{

        private $codigo;
        private $titulo;
        private $fecha;
        private $img_path;
        private $texto;
        private $autor;


        function __construct($titulo, $fecha, $img_path, $texto, $autor){
            $this->codigo = 0;
            $this->titulo = $titulo;
            $this->fecha = $fecha;
            $this->img_path = $img_path;
            $this->texto = $texto;
            $this->autor = $autor;
        }
        function setCodigo($codigo){
            $this->codigo = $codigo;
        }
        function getCodigo(){
            return $this->codigo;
        }
        function getTitulo(){
            return $this->titulo;
        }
        function getFecha(){
            return $this->fecha;
        }
        function getImage(){
            return $this->img_path;
        }
        function getTexto(){
            return $this->texto;
        }
        function getAutor(){
            return $this->autor;
        }
        function toString(){
            return "
            Codigo : ".$this->codigo."\n
            Titulo : ".$this->titulo."\n
            Fecha : ".$this->fecha."
            Image_Path : ".$this->img_path."
            Texto : ".$this->texto."
            Autor : ".$this->autor."";
        }
    }
?>