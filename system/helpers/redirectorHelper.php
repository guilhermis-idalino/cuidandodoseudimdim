<?php

class redirectorHelper {

    protected $parametros = array();

    protected function go($info) {
        header("Location: /cuidandoseudimdim/" . $info);
    }

    public function setUrlParametro($nome, $valor) {
        $this->parametros[$nome] = $valor;
        return $this;
    }

    protected function getUrlParametros() {
        $param = "";
        foreach ($this->parametros as $nome => $valor) {
            $param .= $nome . '/' . $valor . '/';
        }
        return $param;
    }

    public function goToControlador($controlador) {
        $this->go($controlador . '/index/' . $this->getUrlParametros());
    }

    public function goToAcao($acao) {
        $this->go($this->getCurrentControlador() . '/' . $acao . '/' . $this->getUrlParametros());
    }

    public function goToControladorAcao($controlador, $acao) {
        $this->go($controlador . '/' . $acao . '/' . $this->getUrlParametros());
    }

    public function goToIndex() {
        $this->goToControlador('Index');
    }

    public function goToUrl($url) {
        header("Location: " . $url);
    }

    public function getCurrentControlador() {
        global $start;
        return $start->_controlador;
    }

    public function getCurrentAcao() {
        global $start;
        return $start->_acao;
    }

}
