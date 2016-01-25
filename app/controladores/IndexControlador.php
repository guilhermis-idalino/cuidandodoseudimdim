<?php

class IndexControlador extends Controlador {

    private $auth;

    public function init() {
        $this->auth = new authHelper();

        $resposta = $this->auth->setLoginControllerAction('Index', 'index')
                ->checkLogin('boolean');

        if ($resposta == true) {
            $this->auth->logout();
        }
    }

    public function index_action() {
        $this->visao("index", array('sit' => "correto"));
    }

}
