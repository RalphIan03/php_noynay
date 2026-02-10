<?php
include "../config/includes.php";

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $getUser = getUser($user_id);
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

    <h1>View and Update Page</h1>

    <form action="functions/updateUser.php" method="POST">
        <label for="name">Name</label>
        <input name="name" type="text" value="<?= $getUser[0]['name'] ?>">

        <label for="age">Age</label>
        <input name="age" type="number" value="<?= $getUser[0]['age'] ?>">

        <label for="address">Address</label>
        <input name="address" type="text" value="<?= $getUser[0]['address'] ?>">

        <label for="user_name">Username</label>
        <input name="user_name" type="text" value="<?= $getUser[0]['username'] ?>">

        <label for="password">Password</label>
        <input name="password" type="text" value="<?= $getUser[0]['password'] ?>">

        <input type="text" name="user_id" value="<?= $getUser[0]['user_id'] ?>" hidden>

        <button>Edit</button>
    </form>

</body>

</html>