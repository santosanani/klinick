<?php

namespace controller;

include "../dao/Role.php";
include "../model/Role.php";

class Role
{
    private \dao\Role $roleDao;

    public function __construct()
    {
        $this->roleDao = new \dao\Role();
    }

    public function createRole(\model\Role $role) {
        $this->roleDao->create($role);
    }

    public function deleteRole(int $role) {
        $this->delete($role);
    }
}