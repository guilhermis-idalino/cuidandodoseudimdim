<?php

class Modelo {

    protected $banco_d;
    // Talvez precise arrumar
    public $_tabela;

    public function __construct() {
        try {
            $this->banco_d = new PDO("mysql:host=localhost;dbname=cuidando_dimdim", "guilhermis_idali", "Guilhermis.2552");
        } catch (PDOException $e) {
            echo 'Ops! Tivemos algum problema para conectar com nosso banco de dados!' . $e->getMessage();
            exit;
        }
    }

    public function inserir(Array $dados) {
        $campos = implode(", ", array_keys($dados));
        $valores = "'" . implode("','", array_values($dados)) . "'";
        $sql = "INSERT INTO {$this->_tabela} ({$campos}) VALUES ({$valores})";
        return $this->banco_d->query($sql);
    }

    public function ler($where = null, $limit = null, $orderby = null) {
        if ($where != null) {
            $where = "WHERE " . $where;
        } else {
            $where = "";
        }

        if ($limit != null) {
            $limit = "LIMIT " . $limit;
        } else {
            $limit = "";
        }

        if ($orderby != null) {
            $orderby = "ORDER BY " . $orderby;
        } else {
            $orderby = "";
        }

        $res = $this->banco_d->query("SELECT* FROM {$this->_tabela} {$where} {$limit} {$orderby}");
        $res->setFetchMode(PDO::FETCH_ASSOC);
        return $res->fetchAll();
    }

    public function alterar(Array $dados, $where) {

        if ($where != null) {
            $where = "WHERE " . $where;
        } else {
            $where = "";
        }

        foreach ($dados as $indice => $valor) {
            $campo[] = $indice . " = '" . $valor . "'";
        }

        $campos = implode(", ", $campo);
        $sql = "UPDATE {$this->_tabela} SET {$campos} {$where}";
        return $this->banco_d->query($sql);
    }

    public function deletar($where) {

        if ($where != null) {
            $where = "WHERE " . $where;
        } else {
            $where = "";
        }

        $sql = "DELETE FROM {$this->_tabela} {$where}";
        return $this->banco_d->query($sql);
    }

}
