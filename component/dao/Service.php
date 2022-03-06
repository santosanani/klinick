<?php
declare(strict_types=1);
namespace dao;

use command\Connection;
include "../model/Service.php";
include "../../command/Connection.php";
class Service
{
    private \PDO $bd;

    public function __construct()
    {
        $this->bd = Connection::connect();
    }

    public function create(\model\Service $service) {
        $prepare = $this->bd->prepare("insert into service(nom_service, description_service) values (:name, :description)");
        $prepare->execute([
            "name" => $service->setName(),
            "description" => $service->setDescription()
        ]);
    }

    public function delete(int $idService) {
        $prepare = $this->bd->prepare("delete from service where id_service = :id");
        $prepare->execute(["id" => $idService]);
    }
}