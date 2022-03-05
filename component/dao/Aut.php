<?php

namespace dao;

include "../../commande/Connection.php";

use command\Connection;
use model\Auth;

class Aut
{
    private \PDO $conn;
    private string $identification;

    public function __construct()
    {
        $this->conn = Connection::connect();
    }

    public function signin(Auth $auth): bool {
        $prepare = $this->conn->prepare("select id_user from users where email_user = :email and motdepasse_user = :password");
        $prepare->execute([
            "email" => $auth->getUsername(),
            "password" => $auth->getPassword()
        ]);
        $result = $prepare->fetch();
        if ($result != null) {
            $this->identification = (string) $result['id_user'];
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return string
     */
    public function getIdentification(): string
    {
        return $this->identification;
    }



}