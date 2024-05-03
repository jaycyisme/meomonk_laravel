<?php
namespace Controller;

include("../handle/Services/UserServices.php");
use Services\UserServices;

class UserControllers
{
    private UserServices $userServices;

    public function __construct()
    {
        $this -> userServices = new UserServices();
    }

    public function viewUser(): void
    {
        $this -> userServices -> viewUser();
    }
}
