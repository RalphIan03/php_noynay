<?php

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $my_uname = "admin";
    $my_pass = "admin1234";
    $user_name = "Chaff Latreel Mark Amad";

    if($username == $my_uname && $password == $my_pass){
        echo "<script> window.location.href = '../dashboard.php?name=".$user_name."'</script>";
    }else{
         echo "<script> window.location.href = '../login.php?status=false'</script>";
    }
}
?>