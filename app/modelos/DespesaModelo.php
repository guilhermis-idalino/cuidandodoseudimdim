<?php

class DespesaModelo extends Modelo {

    public $id_movimento = null;
    public $id_tipo = null;
    public $categoria = null;
    public $titulo = null;
    public $valor = null;
    public $data_vencimento = null;
    public $_tabela = "despesa";

    public function cadastrarDespesa() {
        $dados = array('id_movimento' => $this->id_movimento, 'id_tipo' => $this->id_tipo, 'titulo' => $this->titulo,
            'valor' => $this->valor, 'data_vencimento' => $this->data_vencimento, 'categoria' => $this->categoria);
        return $this->inserir($dados);
    }

    public function excluirDespesa() {
        return $this->deletar("id_movimento = " . $this->id_movimento . " AND titulo = '" . $this->titulo . "'");
    }

    public function buscarDespesa() {
        $resultado = $this->ler("id_movimento = " . $this->id_movimento);
        return $resultado;
    }

}
