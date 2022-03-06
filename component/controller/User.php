<?php

declare(strict_types=1);

namespace controller;

include "../dao/User.php";
include "../model/User.php";

class User
{
    private \dao\User $userDao;

    public function __construct()
    {
        $this->userDao = new \dao\User();
    }

    public function createUser(\model\User $user) {
        $this->userDao->createUser($user);
    }

    public function deleteUser(int $userId) {
        $this->deleteUser($userId);
    }
}