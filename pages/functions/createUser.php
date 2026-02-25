<?php
include "../../config/includes.php";

if (isset($_POST['user_name']) && isset($_POST['user_age']) && isset($_POST['user_address']) && isset($_POST['user_uname']) && isset($_POST['user_password'])) {
    $user_name = $_POST['user_name'];
    $user_age = $_POST['user_age'];
    $user_address = $_POST['user_address'];
    $user_uname = $_POST['user_uname'];
    $user_pass = $_POST['user_password'];

    $sql = "INSERT INTO `user` (name, age, address, username, password) 
            VALUES (
                :name, 
                :age, 
                :address,
                :username,
                :password
                )";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "name" => $user_name,
        "age" => $user_age,
        "address" => $user_address,
        "username" => $user_uname,
        "password" => $user_pass
    ]);

    if ($stmnt) {
        echo "<script> window.location.href = '../dashboard.php'</script>";
    } else {
        echo "Not saved";
    }
}
