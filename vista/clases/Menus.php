<?php

    class Menus
    {
        /**
         * Constructor de la clase.
         */
        public function __construct()
        {
            
        }
        
        /**
         * Se encarga de gestionar los menús de todo el sistema.
         */
        public static function ponerMenus()
        {
            $salida  = "<a href='inicio.php'>Inicio</a> "; //Ojo, se está invocando a los controladores en php y no a los phtml.
            $salida .= "<a href='proyectos.php'>Proyectos</a> "; //Ojo, se está invocando a los controladores en php y no a los phtml.
            $salida .= "<a href='quienes-somos.php'>Quiénes somos.</a> "; //Ojo, se está invocando a los controladores en php y no a los phtml.
            
            return $salida;
        }
    }