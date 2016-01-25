<?php

class System {

    private $_url;
    private $_explode;
    public $_controlador;
    public $_acao;
    public $_parametros;

    public function __construct() {
        $this->setUrl();
        $this->setExplode();
        $this->setControlador();
        $this->setAcao();
        $this->setParametros();
    }

    private function setUrl() {
        $_GET['url'] = (isset($_GET['url']) ? $_GET['url'] : 'Index/index_action');
        $this->_url = $_GET["url"];
    }

    private function setExplode() {
        $this->_explode = explode('/', $this->_url);
    }

    private function setControlador() {
        $this->_controlador = $this->_explode[0];
    }

    private function setAcao() {
        $ac = (!isset($this->_explode[1]) || $this->_explode[1] == null || $this->_explode[1] == "index" ? "index_action" : $this->_explode[1]);
        $this->_acao = $ac;
    }

    private function setParametros() {
        unset($this->_explode[0], $this->_explode[1]);

        if (end($this->_explode) == null)
            array_pop($this->_explode);

        $i = 0;
        if (!empty($this->_explode)) {
            foreach ($this->_explode as $val) {
                if ($i % 2 == 0) {
                    $ind[] = $val;
                } else {
                    $valor[] = $val;
                }
                $i++;
            }
        } else {
            $ind = array();
            $valor = array();
        }

        if (count($ind) == count($valor) && !empty($ind) && !empty($valor)) {
            $this->_parametros = array_combine($ind, $valor);
        } else {
            $this->_parametros = array();
        }
    }

    public function getParametros($nome = null) {
        if ($nome != null) {
            if (array_key_exists($nome, $this->_parametros)) {
                return $this->_parametros[$nome];
            } else {
                return FALSE;
            }
        } else {
            return $this->_parametros;
        }
    }

    public function iniciar() {
        $controlador_path = CONTROLADORES . $this->_controlador . "Controlador.php";
        if (!file_exists($controlador_path)) {
            die("Ops! O Controller Não Existe!");
        } else {
            require_once($controlador_path);
            $controlador_path = $this->_controlador . "Controlador";
            $app = new $controlador_path();

            if (!method_exists($app, $this->_acao)) {
                die("Ops! A Action Não Existe!");
            } else {
                $acao = $this->_acao;
                $app->init();
                $app->$acao();
            }
        }
    }

}
