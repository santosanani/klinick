<?php

namespace dao;
include "../../command/Connection.php";
include "../model/Role.php";
use command\Connection;

class Role
{
    private \PDO $bd;

    public function __construct()
    {
        $this->bd = Connection::connect();
    }

    public function create(\model\Role $role) {
        $prepare = $this->bd->prepare("insert into role(nom_role, description_role) values (:name, :description)");
        $prepare->execute([
            "name" => $role->setName(),
            "description" => $role->setDescription()
        ]);
    }

    public function delete(int $idRole) {
        $prepare = $this->bd->prepare("delete from role where id_role = :id");
        $prepare->execute(["id" => $idRole]);
    }
}