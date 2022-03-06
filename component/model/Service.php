<?php
declare(strict_types=1);
namespace model;

include "Role.php";

class Service extends Role
{
    public function __construct(string $name, string $description)
    {
        parent::setName($name);
        parent::setDescription($description);
    }
}