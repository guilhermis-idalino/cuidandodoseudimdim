<?php
session_start();

define('CONTROLADORES', 'app/controladores/');
define('VISOES', 'app/visoes/php/');
define('MODELOS', 'app/modelos/');
define('HELPERS', 'system/helpers/');

require_once ('system/system.php');
require_once ('system/controlador.php');
require_once ('system/modelo.php');

function __autoload($file) {
    if (file_exists(MODELOS . $file . '.php')) {
        require_once (MODELOS . $file . '.php');
    } else {
        if (file_exists(HELPERS . $file . '.php')) {
            require_once (HELPERS . $file . '.php');
        } else {
            die("Ops! Modelo ou Helper Não Encontrado!");
        }
    }
}

$start = new System();
$start->iniciar();

