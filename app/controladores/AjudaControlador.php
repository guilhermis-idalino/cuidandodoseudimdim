<?php

class AjudaControlador extends Controlador {

    private $auth;

    public function init() {
        $this->auth = new authHelper();

        $this->auth->setLoginControllerAction('Index', 'index')
                ->checkLogin('redirect');
    }

    private function getPerfil() {
        $perfil = new PerfilModelo();
        $perfil->id_usuario = $this->auth->userData('id_usuario');
        $resultado = $perfil->buscarPerfilId();
        return $resultado[0];
    }

    public function tipo_despesa() {
        $tipo = new TipoModelo();
        $tp = $tipo->buscarTipo();
        $res = $this->getPerfil();

        if (isset($res['nome'])) {
            $this->visao('tipos_despesas', array('perfil' => $res, 'tp' => $tp));
        }
    }

}
