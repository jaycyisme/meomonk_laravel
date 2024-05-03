<?php
namespace Models;

class User
{
    private int $id;
    private int $point;
    private string $username;
    private string $email;
    private string $name;
    private string $phoneNumber;
    private string $password;
    private int $rankCustomerId;
    private int $userStatusId;
    private bool $isActive;
    private int $roleId;

    public function __construct()
    {

    }

    public function getId(): int
    {
        return $this -> id;
    }

    public function setId(int $id): void
    {
        $this -> id = $id;
    }

    public function getPoint(): int
    {
        return $this -> point;
    }

    public function setPoint(int $point): void
    {
        $this -> point = $point;
    }

    public function getUsername(): string
    {
        return $this -> username;
    }

    public function setUsername(string $username): void
    {
        $this -> username = $username;
    }

    public function getEmail(): string
    {
        return $this -> email;
    }

    public function setEmail(string $email): void
    {
        $this -> email = $email;
    }

    public function getName(): string
    {
        return $this -> name;
    }

    public function setName(string $name): void
    {
        $this -> name = $name;
    }

    public function getPhoneNumber(): string
    {
        return $this -> phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): void
    {
        $this -> phoneNumber = $phoneNumber;
    }

    public function getPassword(): string
    {
        return $this -> password;
    }

    public function setPassword(string $password): void
    {
        $this -> password = $password;
    }

    public function getRankCustomerId(): int
    {
        return $this -> rankCustomerId;
    }

    public function setRankCustomerId(int $rankCustomerId): void
    {
        $this -> rankCustomerId = $rankCustomerId;
    }

    public function getUserStatusId(): int
    {
        return $this -> userStatusId;
    }

    public function setUserStatusId(int $userStatusId): void
    {
        $this -> userStatusId = $userStatusId;
    }

    public function isActive(): bool
    {
        return $this -> isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this -> isActive = $isActive;
    }

    public function getRoleId(): int
    {
        return $this -> roleId;
    }

    public function setRoleId(int $roleId): void
    {
        $this -> roleId = $roleId;
    }



}
