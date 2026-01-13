<?php

if (isset($_GET['name'])) {
    $name = $_GET['name'];
}else{
    $name = "No Name";
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
    <h1>Welcome <?= $name ?> Have a nice day!</h1>
</body>

</html>