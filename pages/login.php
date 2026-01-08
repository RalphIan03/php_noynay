
<?php
    if(isset($_GET['status']) && $_GET['status'] == "false"){
        echo "<script> alert('Username and Password is incorrect'); </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChaffGPT</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="logincard">
        <h1>Login</h1>
        <form action="functions/loginFunction.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" class="username" name="username">
            <label for="password">Password</label>
            <input type="password" id="password" class="password" name="password">
            
            <button type="submit">Submit</button>
        </form>
    </div>

    <?php

    // $name = "john";
    // $nums = "1";
    // $num = 1.1111;

    // echo ("hello world" . $name);
    // echo ($num + $nums);

    // var_dump($nums);
    // var_dump($num);

    // $num = 0;
    // var_dump($num);

    // echo $name . $nums + $num;
    ?>

</body>

</html>