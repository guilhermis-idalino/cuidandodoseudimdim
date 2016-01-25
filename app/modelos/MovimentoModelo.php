<?php

class MovimentoModelo extends Modelo {

    public $id_movimento = null;
    public $id_usuario = null;
    public $mes = null;
    public $ano = null;
    public $saldo = null;
    public $_tabela = "movimento";

    public function cadastrarMovimento() {
        $dados = array('id_usuario' => $this->id_usuario, 'mes' => $this->mes, 'ano' => $this->ano, 'sit_relatorio' => 0);
        return $this->inserir($dados);
    }

    public function buscarMovimentoIdMov() {
        return $this->ler("d_movimento = " . $this->id_movimento);
    }

    public function buscarMovimentoIdUsu() {
        return $this->ler("id_usuario = " . $this->id_usuario);
    }

    public function buscarMovimentoIdData() {
        return $this->ler("id_usuario = " . $this->id_usuario . " AND mes = " . $this->mes . " AND ano = " . $this->ano);
    }

    public function buscarMovimentoIdAno() {
        return $this->ler("id_usuario = " . $this->id_usuario . " AND ano = " . $this->ano);
    }

    public function alterarRelatorioMovimento() {

        return $this->alterar(array('sit_relatorio' => 1), "id_usuario = " . $this->id_usuario . " AND mes = " . $this->mes . " AND ano = " . $this->ano);
    }

    public function alterarSaldoIdMov() {
        return $this->alterar(array('saldo' => $this->saldo), "id_movimento = " . $this->id_movimento);
    }

}
