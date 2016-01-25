<?php

class PerfilModelo extends Modelo {

    public $id_usuario = null;
    public $nome = null;
    public $sobrenome = null;
    public $idade = null;
    public $genero = null;
    public $email = null;
    public $_tabela = "perfil";

    public function cadastrarPerfil() {
        $dados = array('id_usuario' => $this->id_usuario, 'nome' => $this->nome, 'sobrenome' => $this->sobrenome,
            'idade' => $this->idade, 'genero' => $this->genero, 'email' => $this->email);
        return $this->inserir($dados);
    }

    public function alterarPerfil() {
        $dados = array('email' => $this->email);
        return $this->alterar($dados, "id_usuario = " . $this->id_usuario);
    }

    public function excluirPerfil() {
        return $this->deletar("id_usuario = " . $this->id_usuario);
    }

    public function buscarPerfil() {
        return $this->ler();
    }

    public function buscarPerfilNome() {
        return $this->ler("nome = '" . $this->nome . "'");
    }

    public function buscarPerfilId() {
        return $this->ler("id_usuario = " . $this->id_usuario);
    }

}
