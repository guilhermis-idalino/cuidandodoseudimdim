<?php

class UsuarioControlador extends Controlador {

    private $auth, $db;

    public function init() {
        $this->auth = new authHelper();
        $this->db = new UsuarioModelo();
    }

    public function login() {
        if ($this->getParametros('acao') == '0') {
            $this->auth->setTableName('usuario')
                    ->setUserColumn('login')
                    ->setPassColumn('senha')
                    ->setUser($_POST['usuario'])
                    ->setPass(md5($_POST['senha']))
                    ->setLoginControllerAction('Inicio', 'inicio')
                    ->login();
        }
    }

    public function logout() {
        $this->auth->setLogoutControllerAction('Index', 'index')->logout();
    }

    public function registrar_usuario() {

        $c_senha = TRUE;
        $c_email = TRUE;
        $c_login = TRUE;
        $dados = null;
        $pagina = "registro_usuario";

        if ($this->getParametros('acao') == '0') {
            if ($_POST['senha'] != $_POST['confirma_senha']) {
                $c_senha = FALSE;
                $dados['nome'] = $_POST['nome'];
                $dados['sobrenome'] = $_POST['sobrenome'];
                $dados['idade'] = $_POST['idade'];
                $dados['genero'] = $_POST['genero'];
                $dados['email'] = $_POST['email'];
                $dados['login'] = $_POST['login'];
                $dados['confirma_email'] = $_POST['confirma_email'];
            }
            if ($_POST['email'] != $_POST['confirma_email']) {
                $c_email = FALSE;
                $dados['nome'] = $_POST['nome'];
                $dados['sobrenome'] = $_POST['sobrenome'];
                $dados['idade'] = $_POST['idade'];
                $dados['genero'] = $_POST['genero'];
                $dados['email'] = $_POST['email'];
                $dados['login'] = $_POST['login'];
                $dados['confirma_email'] = $_POST['confirma_email'];
            }

            if ($c_email == TRUE && $c_email == TRUE) {

                $usuario = new UsuarioModelo();
                $usuario->login = $_POST['login'];
                $resposta = $usuario->buscarUsuarioLogin();

                if (isset($resposta[0]['login'])) {
                    $c_login = FALSE;
                    $dados['nome'] = $_POST['nome'];
                    $dados['sobrenome'] = $_POST['sobrenome'];
                    $dados['idade'] = $_POST['idade'];
                    $dados['genero'] = $_POST['genero'];
                    $dados['email'] = $_POST['email'];
                    $dados['login'] = $_POST['login'];
                    $dados['confirma_email'] = $_POST['confirma_email'];
                } else {
                    $usuario->senha = md5($_POST['senha']);
                    $usuario->cadastrarUsuario();
                    $res = $usuario->buscarUsuarioLogin();

                    if (isset($res[0]['id_usuario'])) {

                        $perfil = new PerfilModelo();
                        $perfil->id_usuario = $res[0]['id_usuario'];
                        $perfil->nome = $_POST['nome'];
                        $perfil->sobrenome = $_POST['sobrenome'];
                        $perfil->idade = $_POST['idade'];
                        $perfil->genero = $_POST['genero'];
                        $perfil->email = $_POST['email'];
                        $resposta = $perfil->cadastrarPerfil();

                        if ($resposta == TRUE) {
                            $pagina = "index";
                        } else {
                            $usuario->id_usuario = $res['id_usuario'];
                            $usuario->excluirUsuario();
                        }
                    }
                }
            }
        }
        if ($pagina == "index") {
            $this->visao($pagina, array('sit' => "correto"));
        } else {
            $this->visao($pagina, array('senha' => $c_senha, 'email' => $c_email, 'login' => $c_login, 'dados' => $dados));
        }
    }

    public function dados_in() {

        $this->auth = new authHelper();

        $resposta = $this->auth->setLoginControllerAction('Index', 'index')
                ->checkLogin('boolean');

        if ($resposta == true) {
            $this->auth->logout();
        }

        $this->visao("index", array('sit' => 'incorreto'));
    }

    public function sair() {
        $this->auth->logout();
    }
}
