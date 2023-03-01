<?php

    class Sesiones
    {
        /**
         * Constructor d ela clase.
         *
         */
        public function __construct()
        {
            
        }
        
        /**
         * Se encarga de verificar la sesión o redirigir en caso de no estar en sesión.         *
         */
        public static function verificarSesion()
        {
            if( ! isset( $_SESSION ) ) session_start(); //Iniciar sesión si no está.
            
            if( isset( $_SESSION[ 'usuario' ] ) ) //Si la variable de sesión del usuario existe.
            {
                //Si la variable de sesión existe, peor está vacía.
                if( TRIM( $_SESSION[ 'usuario' ] ) == "" )
                {
                    header( "location: autenticacion.php" );
                    
                } //De lo contrario no hace nada, que en esencia es lo que sucedería para dejar pasar al usuario.
                
            }else{
                
                header( "location: autenticacion.php" );
            }
        }
    }