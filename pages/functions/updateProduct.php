<?php
include "../../config/includes.php";

if (isset($_POST['prod_id'])) {

    $pname = $_POST['pname'];
    $pquant = $_POST['pquant'];
    $ptype = $_POST['ptype'];
    $pprice = $_POST['pprice'];
    $pid = $_POST['prod_id'];
    
    $result = updateProduct($pname, $pquant, $ptype, $pprice, $pid);

    if ($result) {
        echo "<script> window.location.href = '../retrievePage.php'</script>";
    } else {
        echo "<script> window.location.href = '../viewProduct.php?prod_id='" . $userID . "' </script>";
    }
} else {
    echo "<script> window.location.href = '../retrievePage.php'</script>";
}
