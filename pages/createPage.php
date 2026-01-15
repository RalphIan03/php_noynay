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
    <div class="useradd card">
        <h1>Create User</h1>
        <form action="functions/createUser.php" method="POST">
            <label for="">Name</label>
            <input type="text" name="user_name">
            <label for="">Age</label>
            <input type="number" name="user_age">
            <label for="">Address</label>
            <input type="text" name="user_address">

            <button>Submit</button>
        </form>
    </div>


</body>

</html>