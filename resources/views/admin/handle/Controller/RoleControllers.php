<?php
namespace Controller;

use Services\RoleServices;

include("../handle/Services/RoleServices.php");

class RoleControllers
{
    private RoleServices $roleServices;

    public function __construct()
    {
        $this -> roleServices = new RoleServices();
    }

    public function viewDistinctRole(): void
    {
        $this -> roleServices -> viewDistinctRole();
    }
}
