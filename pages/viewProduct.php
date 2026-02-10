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

    <h1>Product Information</h1>
    <br>

    <form action="functions/updateProduct.php" method="POST">
        <label for="">Product Name</label>
        <input type="text" name="pname" value="<?= $getUser[0]['prod_name'] ?>">
        <label for="">Product Quantity</label>
        <input type="number" name="pquant" value="<?= $getUser[0]['prod_quantity'] ?>">
        <label for="">Product Type</label>
        <input type="text" name="ptype" value="<?= $getUser[0]['prod_type'] ?>">
        <label for="">Product Price</label>
        <input type="text" name="pprice" value="<?= $getUser[0]['prod_price'] ?>">

        <input type="text" name="prod_id" value="<?= $getUser[0]['prod_id'] ?>" hidden>
        <button>Edit</button>
    </form>
</body>

</html>