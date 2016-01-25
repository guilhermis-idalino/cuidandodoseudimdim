<?php

class sessionHelper {

    public function createSession($nome, $valor) {
        $_SESSION[$nome] = $valor;
        return $this;
    }

    public function selectSession($nome) {
        return $_SESSION[$nome];
    }

    public function deleteSession($nome) {
        unset($_SESSION[$nome]);
        return $this;
    }

    public function checkSession($nome) {
        return isset($_SESSION[$nome]);
    }

}
