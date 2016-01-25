<?php

class PerfilControlador extends Controlador {

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

    public function perfil() {

        $res = $this->getPerfil();
        $res['login'] = $this->auth->userData("login");

        if (isset($res['nome'])) {
            $this->visao('perfil', array('perfil' => $res, 'opc' => $this->getParametros("opc"), 'sit' => $this->getParametros("sit")));
        }
    }

    public static function alterar_email(PerfilModelo $perfil) {
        echo 'allterar email';
    }

    public function alterar_dados() {
        $res = $this->getPerfil();
        $res['login'] = $this->auth->userData("login");
        $parametros = 'certo';
        $opc = 'perfil';
        $vis = $this->getParametros();
        $valor = '';

        if (isset($vis['alterar'])) {
            switch ($vis['alterar']) {
                case 'login':
                    if (isset($_POST['login_atual'])) {
                        if ($_POST['login_atual'] == $this->auth->userData('login')) {
                            $usuario = new UsuarioModelo();
                            $usuario->login = $_POST['login_novo'];
                            $usuario->id_usuario = $this->auth->userData('id_usuario');
                            $resposta = $usuario->alterarLogin();
                            $this->auth->logout();
                            if (!$resposta) {
                                $opc = 'alterar_login';
                                $parametros = 'erro';
                            }
                        } else {
                            $valor = $_POST['login_atual'];
                            $opc = 'alterar_login';
                            $parametros = 'login_difere';
                        }
                    } else {
                        $valor = $_POST['login_atual'];
                        $opc = 'alterar_login';
                        $parametros = 'erro';
                    }
                    break;

                case 'email':
                    if (isset($_POST['email_atual'])) {
                        if ($_POST['email_atual'] == $res['email']) {
                            if ($_POST['email_novo'] == $_POST['email_novo_confirma']) {
                                $perfil = new PerfilModelo();
                                $perfil->email = $_POST['email_novo'];
                                $perfil->id_usuario = $this->auth->userData('id_usuario');
                                $resposta = $perfil->alterarPerfil();
                                if (!$resposta) {
                                    $opc = 'alterar_email';
                                    $parametros = 'erro';
                                }
                            } else {
                                $valor = $_POST['email_atual'];
                                $opc = 'alterar_email';
                                $parametros = 'emails_difere';
                            }
                        } else {
                            $valor = $_POST['email_atual'];
                            $opc = 'alterar_email';
                            $parametros = 'email_difere';
                        }
                    } else {
                        $valor = $_POST['email_atual'];
                        $opc = 'alterar_email';
                        $parametros = 'erro';
                    }
                    break;

                case 'senha':

                    if (isset($_POST['senha_atual'])) {
                        if (md5($_POST['senha_atual']) == $this->auth->userData('senha')) {
                            if ($_POST['senha_nova'] == $_POST['senha_nova_confirma']) {
                                $usuario = new UsuarioModelo();
                                $usuario->senha = md5($_POST['senha_nova']);
                                $usuario->id_usuario = $this->auth->userData('id_usuario');
                                $resposta = $usuario->alterarSenha();
                                $this->auth->logout();
                                if (!$resposta) {
                                    $opc = 'alterar_senha';
                                    $parametros = 'erro';
                                }
                            } else {
                                $opc = 'alterar_senha';
                                $parametros = 'senhas_difere';
                            }
                        } else {
                            $opc = 'alterar_senha';
                            $parametros = 'senha_difere';
                        }
                    } else {
                        $opc = 'alterar_senha';
                        $parametros = 'erro';
                    }
                    break;
            }

            $res = $this->getPerfil();
            $res['login'] = $this->auth->userData("login");
            if (isset($res['nome'])) {
                $this->visao('perfil', array('perfil' => $res, 'opc' => $opc, 'value' => $valor, 'sit' => $parametros));
            }
        }
    }

}
