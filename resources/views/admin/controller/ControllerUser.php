<?php

    include("../database/model/user.php");
    include("../database/business/user.php");
    include("../database/public/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy các giá trị từ biểu mẫu
    $username = $_POST["Username"];
    $email = $_POST["Email"];
    $name = $_POST["Name"];
    $phoneNumber = $_POST["PhoneNumber"];
    $password = $_POST["Password"];
    $roleId = $_POST["RoleId"];



    $user = new User();
    $user->setUsername($username);
    $user->setEmail($email);
    $user->setName($name);
    $user->setPhoneNumber($phoneNumber);
    $user->setPassword($password);
    $user->setRoleId($roleId);


    echo "Username: " . $user->getUsername() . "<br>";
    echo "Email: " . $user->getEmail() . "<br>";
    echo "Name: " . $user->getName() . "<br>";
    echo "Phone Number: " . $user->getPhoneNumber() . "<br>";
    echo "Password: " . $user->getPassword() . "<br>";
    echo "Role ID: " . $user->getRoleId() . "<br>";

    $list_mathang = new list_mathang();

    echo "<table border='1'>";
        echo "<tr><th>Username</th><th>Name</th><th>Phone Number</th><th>Email</th><th>Actions</th></tr>";
        $list_mathang->view();
        echo "</table>";
 



    //     if ($list_mathang->add($user)) {
    //     echo "Thêm người dùng thành công!";
    // } else {
    //     echo "Thêm người dùng không thành công!";
    // }



}
    
?>
