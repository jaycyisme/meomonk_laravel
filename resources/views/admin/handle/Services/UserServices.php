<?php

namespace Services;

use connection;
use Models\User;

class UserServices
{
    private array $list;
    private int $n;
    private connection $conn;

    public function __construct()
    {
        $this -> list = array();
        $this -> conn = new connection("meomonk");
        $this -> n = 0;
    }

    public function viewUser(): void
    {
        $this -> list = $this -> conn -> _viewTable("User");


        // Kiểm tra nếu danh sách không rỗng
        if (!empty($this -> list)) {

            // Duyệt qua từng dòng trong danh sách và hiển thị thông tin người dùng
            foreach ($this -> list as $row) {
                echo "<tr>";
                echo "<td>";
                echo "<div class='user-name'>";
                echo "<span>" . $row['Username'] . "</span>"; // Giả sử có trường Address trong cơ sở dữ liệu
                echo "</div>";
                echo "</td>";

                echo "<td>";
                echo "<div class='user-name'>";
                echo "<span>" . $row['Name'] . "</span>"; // Giả sử có trường Address trong cơ sở dữ liệu
                echo "</div>";
                echo "</td>";

                echo "<td>" . $row['PhoneNumber'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";

                echo "<td>";
                echo "<ul>";
                echo "<li><a href='../../back-end/order-detail.html'><i class='ri-eye-line'></i></a></li>";
                echo "<li><a href='javascript:void(0)'><i class='ri-pencil-line'></i></a></li>";
                echo "<li><a href='javascript:void(0)' data-bs-toggle='modal' data-bs-target='#exampleModalToggle'><i class='ri-delete-bin-line'></i></a></li>";
                echo "</ul>";
                echo "</td>";

                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Không có người dùng nào trong cơ sở dữ liệu.</td></tr>";
        }
    }


    public function addUser(User $user): bool
    {
        $username = $this -> conn -> $user -> getUsername();
        $email = $this -> conn -> $user -> getEmail();
        $name = $this -> conn -> $user -> getName();
        $phoneNumber = $this -> conn -> $user -> getPhoneNumber();
        $password = $this -> conn -> $user -> getPassword();
        $roleId = $this -> conn -> $user -> getRoleId();

        // Build SQL Dialect here
        $sql = "INSERT INTO Users ( Username, Email, Name, PhoneNumber, Password, RoleId) 
        VALUES ('$username', '$email', '$name', '$phoneNumber', '$password', $roleId)";

        // Run INSERT SQL
        return $this -> conn -> execute($sql);
    }


}


