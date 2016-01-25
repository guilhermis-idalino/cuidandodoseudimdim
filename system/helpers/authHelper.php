<?php

class authHelper {

    protected $sessionHelper, $redirectorHelper, $tableName, $userColumn,
            $passColumn, $user, $pass, $loginController = 'Index', $loginAction = "index",
            $logoutController = "Index", $logoutAction = "index";

    public function __construct() {
        $this->sessionHelper = new sessionHelper();
        $this->redirectorHelper = new redirectorHelper();
        return $this;
    }

    public function setTableName($val) {
        $this->tableName = $val;
        return $this;
    }

    public function setUserColumn($val) {
        $this->userColumn = $val;
        return $this;
    }

    public function setPassColumn($val) {
        $this->passColumn = $val;
        return $this;
    }

    public function setUser($val) {
        $this->user = $val;
        return $this;
    }

    public function setPass($val) {
        $this->pass = $val;
        return $this;
    }

    public function setLoginControllerAction($controller, $action) {
        $this->loginController = $controller;
        $this->loginAction = $action;
        return $this;
    }

    public function setLogoutControllerAction($controller, $action) {
        $this->logoutController = $controller;
        $this->logoutAction = $action;
        return $this;
    }

    public function login() {
        $db = new Modelo();
        $db->_tabela = $this->tableName;
        $where = $this->userColumn . "='" . $this->user . "' and " . $this->passColumn . "='" . $this->pass . "'";
        $sql = $db->ler($where);



        if (isset($sql[0]['id_usuario'])) {
            if ($sql[0]['login'] == $this->user) {
                if ($sql[0]['senha'] == $this->pass) {
                    $this->sessionHelper->createSession("userAuth", TRUE)
                            ->createSession("userData", $sql[0]);
                } else {
                    $this->loginController = 'Usuario';
                    $this->loginAction = 'dados_in';
                }
            } else {
                $this->loginController = 'Usuario';
                $this->loginAction = 'dados_in';
            }
        } else {
            $this->loginController = 'Usuario';
            $this->loginAction = 'dados_in';
        }
        $this->redirectorHelper->goToControladorAcao($this->loginController, $this->loginAction);
        return $this;
    }

    public function logout() {
        $this->sessionHelper->deleteSession("userAuth")
                ->deleteSession("userData");
        $this->redirectorHelper->goToControladorAcao($this->logoutController, $this->logoutAction);
        return $this;
    }

    public function checkLogin($action) {
        switch ($action) {
            case "boolean":

                if (!$this->sessionHelper->checkSession("userAuth")) {
                    return false;
                } else {
                    return true;
                }

                break;

            case "redirect":

                if (!$this->sessionHelper->checkSession("userAuth")) {
                    if ($this->redirectorHelper->getCurrentControlador() != $this->loginController || $this->redirectorHelper->getCurrentAcao() != $this->loginAction) {
                        $this->redirectorHelper->goToControladorAcao($this->loginController, $this->loginAction);
                    }
                }

                break;

            case "stop":
                if (!$this->sessionHelper->checkSession("userAuth")) {
                    exit();
                }
                break;
        }
    }

    public function userData($key) {
        $s = $this->sessionHelper->selectSession("userData");
        return $s[$key];
    }

}
