<?php

class SaldoControlador extends Controlador {

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

    public function saldo_mes() {

        $tipo = null;
        $categoria = null;
        $res = $this->getPerfil();
        $mov = $this->movimento();
        $sit = 'certo';
        $certo = TRUE;
        $m_atu = $mov['mes'];
        $a_atu = $mov['ano'];
        $movimento = new MovimentoModelo();
        $movimento->id_usuario = $mov['id_usuario'];
        $mov_a = $movimento->buscarMovimentoIdUsu();
        if ($mov['mes'] == 1) {
            $anos_select[] = ($mov['ano'] - 1);
            $meses_select[] = 12;
        } else {
            $anos_select[] = $mov['ano'];
            $meses_select[] = ($mov['mes'] - 1);
        }
        foreach ($mov_a as $value) {
            $cer_a = true;
            $cer_m = true;

            foreach ($anos_select as $val) {
                if ($val == $value['ano']) {
                    $cer_a = false;
                }
            }

            foreach ($meses_select as $val) {
                if ($val == $value['mes']) {
                    $cer_m = false;
                }
            }

            if ($cer_a) {
                $anos_select[] = $value['ano'];
            }

            if ($cer_m) {
                $meses_select[] = $value['mes'];
            }
        }

        if (isset($_POST['num_ano'])) {
            $veri = new MovimentoModelo();
            $veri->id_usuario = $mov['id_usuario'];
            $veri->ano = $_POST['num_ano'];
            $soma = 0;
            $veri->mes = $_POST['num_mes'];
            $m = $veri->buscarMovimentoIdData();
            $a_atu = $_POST['num_ano'];
            $m_atu = $_POST['num_mes'];
            if (isset($m[0]) && $m[0]['sit_relatorio'] == 1) {
                $rec = new ReceitaModelo();
                $rec->id_movimento = $m[0]['id_movimento'];
                $receitas = $rec->buscarReceita();
                $receita = 0;
                foreach ($receitas as $value) {
                    $receita += $value['valor'];
                }

                $des = new DespesaModelo();
                $des->id_movimento = $m[0]['id_movimento'];
                $despesas = $des->buscarDespesa();

                $tipo = array('fix' => 0, 'var' => 0, 'saldo' => 0);
                foreach ($despesas as $value) {
                    switch ($value['id_tipo']) {
                        case 3:
                            $tipo['fix'] += $value['valor'];
                            $soma += $value['valor'];
                            break;
                        case 4:
                            $tipo['var'] += $value['valor'];
                            $soma += $value['valor'];
                            break;
                    }
                }
                $tipo['saldo'] = $receita - $soma;
                $soma = 0;

                $categoria = array('cartao' => 0, 'cuida_pes' => 0, 'edu' => 0, 'hab' => 0, 'imp' => 0, 'laz' => 0, 'manu' => 0,
                    'sau' => 0, 'trans' => 0, 'vest' => 0, 'out' => 0, 'saldo' => 0);
                foreach ($despesas as $value) {
                    switch ($value['categoria']) {
                        //verificar encode decode
                        case 'Cartão de crédito':
                            $categoria['cartao'] += $value['valor'];
                            $soma += $value['valor'];
                            break;
                        case 'Cuidados pessoais':
                            $categoria['cuida_pes'] += $value['valor'];
                            $soma += $value['valor'];
                            break;
                        case 'Educação':
                            $categoria['edu'] += $value['valor'];
                            $soma += $value['valor'];
                            break;
                        case 'Habitação':
                            $categoria['hab'] += $value['valor'];
                            $soma += $value['valor'];
                            break;
                        case 'Imposto':
                            $categoria['imp'] += $value['valor'];
                            $soma += $value['valor'];
                            break;
                        case 'Lazer':
                            $categoria['laz'] += $value['valor'];
                            $soma += $value['valor'];
                            break;
                        case 'Manutenção ou prevenção':
                            $categoria['manu'] += $value['valor'];
                            $soma += $value['valor'];
                            break;
                        case 'Saúde':
                            $categoria['sau'] += $value['valor'];
                            $soma += $value['valor'];
                            break;
                        case 'Transporte':
                            $categoria['trans'] += $value['valor'];
                            $soma += $value['valor'];
                            break;
                        case 'Vestuário':
                            $categoria['vest'] += $value['valor'];
                            $soma += $value['valor'];
                            break;
                        case 'Outros':
                            $categoria['out'] += $value['valor'];
                            $soma += $value['valor'];
                            break;
                    }
                }
                $categoria['saldo'] = $receita - $soma;
                $soma = 0;
            } else {
                $sit = 'erro';
                $certo = false;
            }
        } else {
            $certo = false;
        }

        if (isset($res['nome'])) {
            $this->visao('saldo_mes', array('perfil' => $res, 'ano_atual' => $a_atu, 'mes_atual' => $m_atu, 'anos' => $anos_select, 'meses' => $meses_select, 'sit' => $certo, 'sits' => $sit, 'despesa_tipo' => $tipo, 'despesa_cat' => $categoria));
        }
    }

    public function saldo_todos() {

        $mov = $this->movimento();
        $res = $this->getPerfil();
        $ano = '';

        if (isset($_POST['num_ano'])) {
            $ano = $_POST['num_ano'];
        } else {
            $ano = $mov['ano'];
        }

        $movimento = new MovimentoModelo();
        $movimento->id_usuario = $mov['id_usuario'];
        $movimento->ano = $ano;
        $mov_anos = $movimento->buscarMovimentoIdAno();
        $mov_a = $movimento->buscarMovimentoIdUsu();
        $anos_select[] = $ano;
        foreach ($mov_a as $value) {
            $cer = true;
            foreach ($anos_select as $val) {
                if ($val == $value['ano']) {
                    $cer = false;
                }
            }
            if ($cer) {
                $anos_select[] = $value['ano'];
            }
        }

        if (isset($res['nome'])) {
            $this->visao('todos_saldos', array('perfil' => $res, 'ano_atual' => $mov['ano'], 'dados' => $mov_anos, 'anos' => $anos_select));
        }
    }

}
