<?php

include_once("../Database/Connect.php");

class generalServices
{
    private Connect $connect;

    public function __construct()
    {
        $this -> connect = new Connect("MeoMonkData");
    }

    // Services
    public function getAll(string $tableName): mysqli_result
    {
        $sql = "SELECT * FROM " . $tableName;
        return $this -> connect -> conn -> query($sql);
    }

    public function getById(string $tableName, int $Id): mysqli_result
    {
        $sql = "SELECT * FROM " . $tableName . " WHERE id = " . $Id;
        return $this -> connect -> conn -> query($sql);
    }

    public function getAllName(string $tableName): mysqli_result
    {
        $sql = "SELECT DISTINCT Name FROM " . $tableName;
        return $this -> connect -> conn -> query($sql);
    }

    public function closeDatabase(): void
    {
        $this -> connect -> conn -> close();
    }

}