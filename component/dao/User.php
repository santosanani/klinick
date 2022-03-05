<?php

namespace dao;

include "../../commande/Connection.php";

use Cassandra\Date;
use command\Connection;

class User
{
    private \PDO $pdo;

    public function __construct()
    {
        $this->pdo = Connection::connect();
    }

    public function createUser(\model\User $user) {
        $prepare = $this->pdo->prepare("insert into users(nom_user, prenom_user, motdepasse_user, genre, email_user, 
                  lien_img, id_role, id_service) values (:lastName, :firstName, :password, :genre, :email,
                                                         profile, :role, :service)");
        $prepare->execute([
            "lastName" => $user->getLastName(),
            "firstName" => $user->getFirstName(),
            "password"
        ]);
    }

    public function deleteUser(int $idUser) {
        $prepare = $this->pdo->prepare("delete form user where id_user = :idUser");
        $prepare->execute(["idUser" => $idUser]);
    }

    private function updateUser(\model\User $user) {
    }

}