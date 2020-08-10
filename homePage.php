<?php

if (!isset($_COOKIE['status'])) {
    header('location: registration.php?error=youAreNotLoggedIn');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>

    <?php
    $id = $_COOKIE['id'];
    $con = mysqli_connect('localhost:3306', 'root', '', 'test');
    $sql = "select * from users where id='" . $id . "'";

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);




    ?>
    <h1>Welcome <?php echo  $row['name'] ?></h1>

    <a href="changePassword.php">Change Password</a>
    <br>
    <?php if ($row['userType'] === 'admin') {
        echo ' <a href="users.php">users</a>';
        echo '<br>';
    } ?>

    <a href="profile.php">Profile</a>





</body>

</html>