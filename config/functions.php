<?php

function retrieveAllUsers()
{
    include "connection.php";

    $sql = "SELECT * FROM user";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

function loginAuth($usernames, $passwords)
{
    include "connection.php";

    $sql = "SELECT * FROM user WHERE username = :username AND password = :password ";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "username" => $usernames,
        "password" => $passwords
    ]);

    $count = $stmnt->rowCount();


    return $count;
}

function getUser($user_id)
{
    include "connection.php";

    $sql = "SELECT * FROM user WHERE user_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "id" => $user_id
    ]);

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

function retrieveAllProducts()
{
    include "connection.php";

    $sql = "SELECT * FROM products";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

//para ni sa pagkuah ug product based sa id
function getProduct($prod_id)
{
    include "connection.php";

    $sql = "SELECT * FROM products WHERE prod_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "id" => $prod_id
    ]);

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

//this is for updating user
function updateUser($userID, $name, $age, $address, $usernames, $passwords)
{
    include "connection.php";

    $sql = "UPDATE user SET 
                name= :name, 
                age= :age, 
                address= :address, 
                username= :username, 
                password= :password
                WHERE
                user_id= :user_id
                ";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "name" => $name,
        "age"=> $age,
        "address" => $address,
        "username" => $usernames,
        "password" => $passwords,
        "user_id" => $userID
    ]);

    return $stmnt;
}

function updateProduct($pname, $pquant, $ptype, $pprice, $pid)
{
    include "connection.php";

    $sql = "UPDATE products SET 
                prod_name= :pname, 
                prod_quantity= :pquant, 
                prod_type= :ptype, 
                prod_price= :pprice
                WHERE
                prod_id= :pid
                ";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "pname" => $pname,
        "pquant"=> $pquant,
        "ptype" => $ptype,
        "pprice" => $pprice,
        "pid" => $pid,
    ]);

    return $stmnt;
}