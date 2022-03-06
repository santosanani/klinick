<?php

declare(strict_types=1);

namespace controller;

include "../dao/Service.php";
include "../model/Service.php";

class Service
{
    private \dao\Service $serviceDao;

    public function __construct()
    {
        $this->serviceDao = new \dao\Service();
    }

    public function createService(\model\Service $service) {
        $this->serviceDao->create($service);
    }

    public function deleteService(\model\Service $service) {
        $this->serviceDao->create($service);
    }
}