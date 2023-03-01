<?php

    include( "../vista/clases/Menus.php" );
    
    $menus = Menus::ponerMenus();
        
    //El controlador invoca y controla a su vista respectiva.
    include( "../vista/inicio.phtml" );