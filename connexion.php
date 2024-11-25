<?php

class connexion {
    private $pdo;
    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=ecommerce";
        $user = "root";
        $pwd = "";
        $this->pdo = new PDO($dsn,$user,$pwd);
    }

    public function getConnexion () {
        return $this->pdo;
    }
}