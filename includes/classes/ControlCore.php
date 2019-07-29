<?php

namespace classes;

if (! isset($_SESSION["language"])) {
    session_start();
    
    // Default  
    $_SESSION["language"] = "en";
}

switch ($_SESSION["language"]) {
    case "en":
        require_once 'static/lang/English.php';
        break;
    case "es":
        require_once 'static/lang/Spanish.php';
        break;
    default:
        require_once 'static/lang/English.php';
        break;
}

function info_data(){
    /***VARIABLES POR SESSION ***/
    echo '<br><h1>SESSION</h1>';
    foreach ($_SESSION as $valor1 => $valor2) { echo '<p>'.$valor1.' = '.$valor2.'</p>'; }

    /***VARIABLES POR COOKIE ***/
    echo '<br><h1>COOKIE</h1>';
    foreach ($_COOKIE as $valor1 => $valor2) { echo '<p>'.$valor1.' = '.$valor2.'</p>'; }
}


?>