<?php

class TipoModelo extends Modelo {

    public $id_tipo = null;
    public $tipo = null;
    public $descricao = null;
    public $_tabela = "tipo";

    public function buscarTipo() {
        return $this->ler();
    }

    public function buscarTipoId() {
        return $this->ler("id_tipo = " . $this->id_tipo);
    }

    public function buscarTipoT() {
        return $this->ler("tipo = " . $this->tipo);
    }

}
