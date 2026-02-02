<?php
include "../config/includes.php";
$list = retrieveAllUsers();
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
                <td><a href="viewPage.php?user_id=<?= $item['user_id'] ?>">View</a></td>
            </tr>
        <?php
        }
        ?>
    </table>


</body>

</html>