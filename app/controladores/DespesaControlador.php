<?php

class DespesaControlador extends Controlador {

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

    public function nova_despesa() {
        $parametros = null;
        $valores = null;
        $tipos = null;
        $tipo = new TipoModelo();
        $movimento = $this->movimento();

        if (isset($_POST['valor'])) {

            if (isset($movimento['id_movimento'])) {

                if ($_POST['valor'] >= 0) {
                    $tipo->id_tipo = $_POST['tipo'];
                    $tip = $tipo->buscarTipoId();

                    if (isset($tip[0]['tipo'])) {

                        $despesa = new DespesaModelo();
                        $despesa->id_movimento = $movimento['id_movimento'];
                        $despesa->categoria = $_POST['categoria'];
                        $despesa->data_vencimento = $_POST['data_vencimento'];
                        $despesa->id_tipo = $tip[0]['id_tipo'];
                        $despesa->titulo = $_POST['titulo'];
                        $despesa->valor = $_POST['valor'];
                        $resposta = $despesa->cadastrarDespesa();

                        if ($resposta) {

                            $redirect = new redirectorHelper();
                            $redirect->goToControladorAcao("Despesa", "minhas_despesas");
                        } else {

                            $parametros = array('sit' => 'erro');
                            $valores = array('categoria' => $_POST['categoria'], 'data_vencimento' => $_POST['data_vencimento'],
                                'tipo' => $_POST['tipo'], 'titulo' => $_POST['titulo'], 'valor' => $_POST['valor']);
                        }
                    }
                } else {
                    $parametros = array('sit' => 'valor');
                    $valores = array('categoria' => $_POST['categoria'], 'data_vencimento' => $_POST['data_vencimento'],
                        'tipo' => $_POST['tipo'], 'titulo' => $_POST['titulo'], 'valor' => $_POST['valor']);
                }
            }
        }
        $res = $this->getPerfil();

        if (isset($res['nome'])) {
            $tipos = $tipo->buscarTipo();
            $this->visao('nova_despesa', array('perfil' => $res, 'parametros' => $parametros, 'tipos' => $tipos, 'valores' => $valores, 'ano' => $movimento['ano'], 'mes' => $movimento['mes']));
        } else {
            echo 'OPS! Problemas na resolução do perfil!';
        }
    }

    public function minhas_despesas() {
        $despesas = null;
        $despesa = new DespesaModelo();
        $dt = getdate();

        $movimento = $this->movimento();
        if (isset($movimento['id_movimento'])) {
            $despesa->id_movimento = $movimento['id_movimento'];
            $despesas = $despesa->buscarDespesa();

            $tipo = new TipoModelo();
            $n = 0;
            if (is_array($despesas)) {
                foreach ($despesas as $value) {
                    $tipo->id_tipo = $value['id_tipo'];
                    $tip = $tipo->buscarTipoId();
                    $despesas[$n]['tipo'] = $tip[0]['tipo'];
                    $n++;
                }
            }
        } else {
            echo 'OPS! Problemas com o Banco de Dados';
        }

        $res = $this->getPerfil();

        if (isset($res['nome'])) {
            $this->visao('minhas_despesas', array('perfil' => $res, 'despesas' => $despesas, 'ano' => $dt['year'], 'mes' => $dt['mon']));
        } else {
            echo 'OPS! Problemas na resolução do perfil!';
        }
    }

}
