<?php
include "../config/includes.php";

if (isset($_GET['prod_id'])) {
    $prod_id = $_GET['prod_id'];
    $getUser = getProduct($prod_id);

} else {
    echo "<script> window.location.href='retrievePage.php' </script>";
}


?>

<!DOCTYPE html>
<html lang="en">
<?php
include "resources/header.php";
?>

<body>
    <?php
    include "resources/navigation.php";
    ?>

    <h1>Name: <?= $getUser[0]['prod_name'] ?></h1>
    <h4>Age: <?= $getUser[0]['prod_quantity'] ?></h4>
    <h4>Address: <?= $getUser[0]['address'] ?></h4>
    <h4>Username: <?= $getUser[0]['username'] ?></h4>
    <a href="">Edit</a>
</body>

</html>