<?php

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $my_uname = "admin";
    $my_pass = "admin1234";

    if($username == $my_uname && $password == $my_pass){
        echo "<script> window.location.href = '../dashboard.php'</script>";
    }else{
         echo "<script> window.location.href = '../login.php'</script>";
    }
}
?>