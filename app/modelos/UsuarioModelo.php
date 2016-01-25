<?php

class UsuarioModelo extends Modelo {

    public $id_usuario = null;
    public $login = null;
    public $senha = null;
    public $_tabela = "usuario";

    public function cadastrarUsuario() {
        $dados = array('login' => $this->login, 'senha' => $this->senha);
        return $this->inserir($dados);
    }

    public function alterarLogin() {
        $dados = array('login' => $this->login);
        return $this->alterar($dados, "id_usuario = " . $this->id_usuario);
    }

    public function alterarSenha() {
        $dados = array('senha' => $this->senha);
        return $this->alterar($dados, "id_usuario = " . $this->id_usuario);
    }

    public function excluirUsuario() {
        return $this->deletar("id_usuario = " . $this->id_usuario);
    }

    public function buscarUsuario() {
        return $this->ler();
    }

    public function buscarUsuarioId() {
        return $this->ler("id_usuario = " . $this->id_usuario);
    }

    public function buscarUsuarioLogin() {
        return $this->ler("login = '" . $this->login . "'");
    }

}
