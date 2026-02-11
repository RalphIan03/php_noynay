<?php
include "../config/includes.php";
$list = retrieveAllUsers();
$productList = retrieveAllProducts();
// echo json_encode($list);

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

    <!-- contents -->

    <h1>This is Retrive page</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Username</th>
            <th>Action</th>
        </tr>

        <?php
        foreach ($list as $item) {
        ?>
            <tr>
                <td><?= $item["name"] ?></td>
                <td><?= $item["age"] ?></td>
                <td><?= $item["address"] ?></td>
                <td><?= $item["username"] ?></td>
                <td><a href="viewPage.php?user_id=<?= $item['user_id'] ?>">View</a>
                    <a href="functions/deleteFunction.php?deleteFrom=user&id=<?= $item['user_id'] ?>">Delete</a>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>

    <br>

    <h1>Products</h1>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Product Quantity</th>
            <th>Product Type</th>
            <th>Product Price</th>
            <th>Action</th>
        </tr>

        <?php
        foreach ($productList as $item) {
        ?>
            <tr>
                <td><?= $item["prod_name"] ?></td>
                <td><?= $item["prod_quantity"] ?></td>
                <td><?= $item["prod_type"] ?></td>
                <td><?= $item["prod_price"] ?></td>
                <td><a href="viewProduct.php?prod_id=<?= $item['prod_id'] ?>">View</a>
                    <a href="functions/deleteFunction.php?deleteFrom=product&id=<?= $item['prod_id'] ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br>
</body>

<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'ok') {
        echo "<script> alert('Value Deleted Successfully') </script>";
    } else if ($_GET['status'] == 'no') {
        echo "<script> alert('Value Deleted Unsuccessfully') </script>";
    }
}
?>

</html>