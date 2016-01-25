<?php

class ReceitaControlador extends Controlador {

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

    private function movimento() {
        $data = getdate();

        $mov = new MovimentoModelo();
        $mov->id_usuario = $this->auth->userData("id_usuario");
        $mov->mes = $data['mon'];
        $mov->ano = $data['year'];
        $resultado = $mov->buscarMovimentoIdData();
        return $resultado[0];
    }

    public function minhas_receitas() {
        $receitas = null;
        $receita = new ReceitaModelo();
        $dt = getdate();

        $movimento = $this->movimento();
        if (isset($movimento['id_movimento'])) {
            $receita->id_movimento = $movimento['id_movimento'];
            $receitas = $receita->buscarReceita();
        } else {
            echo 'OPS! Problemas com o Banco de Dados';
        }

        $res = $this->getPerfil();

        if (isset($res['nome'])) {
            $this->visao('minhas_receitas', array('perfil' => $res, 'receitas' => $receitas, 'ano' => $dt['year'], 'mes' => $dt['mon']));
        } else {
            echo 'OPS! Problemas na resolução do perfil!';
        }
    }

    public function nova_receita() {
        $parametros = array('sit' => '');
        $valores = null;
        $movimento = $this->movimento();

        if (isset($_POST['valor'])) {

            if (isset($movimento['id_movimento'])) {

                if ($_POST['valor'] >= 0) {

                    $receita = new ReceitaModelo();
                    $receita->id_movimento = $movimento['id_movimento'];
                    $receita->titulo = $_POST['titulo'];
                    $receita->valor = $_POST['valor'];
                    $receita->data_recebimento = $_POST['data_recebimento'];
                    $resposta = $receita->cadastrarReceita();

                    if ($resposta) {
                        $redirect = new redirectorHelper();
                        $redirect->goToControladorAcao("Receita", "minhas_receitas");
                    } else {
                        $parametros = array('sit' => 'erro');
                        $valores = array('titulo' => $_POST['titulo'], 'valor' => $_POST['valor'],
                            'data_recebimento' => $_POST['data_recebimento']);
                    }
                } else {
                    $parametros = array('sit' => 'valor');
                    $valores = array('titulo' => $_POST['titulo'], 'valor' => $_POST['valor'],
                        'data_recebimento' => $_POST['data_recebimento']);
                }
            }
        }

        $res = $this->getPerfil();

        if (isset($res['nome'])) {
            $this->visao('nova_receita', array('perfil' => $res, 'parametros' => $parametros, 'valores' => $valores, 'ano' => $movimento['ano'], 'mes' => $movimento['mes']));
        } else {
            echo 'OPS! Problemas na resolução do perfil!';
        }
    }

}
