<?php

class Controlador extends System {

    protected function visao($nome_visao, $variaveis = null) {
        if (is_array($variaveis) && count($variaveis) > 0) {
            extract($variaveis, EXTR_PREFIX_ALL, "visao");
        }

        $file = VISOES . $nome_visao . '.php';

        if (!file_exists($file)) {
            die("Ops! Visao nao existe.");
        }

        require_once ($file);
    }

    public function init() {
        
    }

}
