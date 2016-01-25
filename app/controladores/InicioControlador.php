<?php

class InicioControlador extends Controlador {

    private $auth;

    public function init() {
        $this->auth = new authHelper();

        $check = $this->auth->setLoginControllerAction('Index', 'index')
                ->checkLogin('boolean');

        if ($check) {
            $data = getdate();

            $mov = new MovimentoModelo();
            $mov->id_usuario = $this->auth->userData("id_usuario");
            $mov->mes = $data['mon'];
            $mov->ano = $data['year'];
            $mov_res = $mov->buscarMovimentoIdData();

            if (!isset($mov_res[0]['id_movimento'])) {
                $todo = $mov->buscarMovimentoIdUsu();
                $rs = $mov->cadastrarMovimento();

                if (isset($todo[0]['id_movimento'])) {
                    if ($rs) {
                        $ano = $data['year'];
                        $mes = $data['mon'];
                        if ($data['mon'] == 1) {
                            $ano -= 1;
                            $mes = 12;
                        } else {
                            $mes -= 1;
                        }
                        $mov->mes = $mes;
                        $mov->ano = $ano;
                        $r = $mov->alterarRelatorioMovimento();
                        if ($r) {
                            $mov_res = $mov->buscarMovimentoIdData();
                            if (isset($mov_res[0]['id_movimento'])) {
                                $conti = $this->gera_saldo(array("mes" => $mes, "ano" => $ano, "id_movimento" => $mov_res[0]['id_movimento']));
                                if ($conti == FALSE) {
                                    echo 'OPS! Problemas para gerar saldo!';
                                }
                            } else {
                                echo 'OPS! Problemas com o Banco de Dados!';
                            }
                        } else {
                            echo 'OPS! Problema com geração de relatório!';
                        }
                    } else {
                        echo "Erro no Controle de Movimentos!";
                    }
                }
            }
        } else {
            $redirect = new redirectorHelper();
            $redirect->goToControladorAcao("Index", "index");
        }
    }

    private function getPerfil() {
        $perfil = new PerfilModelo();
        $perfil->id_usuario = $this->auth->userData('id_usuario');
        $resultado = $perfil->buscarPerfilId();
        return $resultado[0];
    }

    public function inicio() {

        $res = $this->getPerfil();

        if (isset($res['nome'])) {
            $this->visao('inicio', array('perfil' => $res));
        }
    }

    public function gera_saldo($dados) {
        $receita = new ReceitaModelo();
        $receita->id_movimento = $dados['id_movimento'];
        $rece = $receita->buscarReceita();
        $conta_receitas = 0;

        if (isset($rece[0]['id_movimento'])) {
            $despesa = new DespesaModelo();
            $despesa->id_movimento = $dados['id_movimento'];
            $despe = $despesa->buscarDespesa();
            $conta_despesas = 0;
            if (isset($despe[0]['id_movimento'])) {
                foreach ($rece as $value) {
                    $conta_receitas += $value['valor'];
                }
                foreach ($despe as $value) {
                    $conta_despesas += $value['valor'];
                }

                $saldo = $conta_receitas - $conta_despesas;

                $movimento = new MovimentoModelo();
                $movimento->id_movimento = $dados['id_movimento'];
                $movimento->saldo = $saldo;
                $resposta = $movimento->alterarSaldoIdMov();
                return $resposta;
            } else {
                echo 'OPS! Problema com o Banco de Dados!';
            }
        } else {
            echo 'OPS! Problema com o Banco de Dados!';
        }
    }

}
