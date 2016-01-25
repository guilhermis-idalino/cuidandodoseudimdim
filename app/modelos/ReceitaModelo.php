<?php

class ReceitaModelo extends Modelo {

    public $id_movimento = null;
    public $titulo = null;
    public $valor = null;
    public $data_recebimento = null;
    public $_tabela = "receita";

    public function cadastrarReceita() {
        $dados = array('id_movimento' => $this->id_movimento, 'titulo' => $this->titulo, 'valor' => $this->valor, 'data_recebimento' => $this->data_recebimento);
        return $this->inserir($dados);
    }

    public function excluirReceita() {
        return $this->deletar("id_movimento = " . $this->id_movimento . " AND titulo = ," . $this->titulo . ",");
    }

    public function buscarReceita() {
        return $this->ler("id_movimento = " . $this->id_movimento);
    }

}
