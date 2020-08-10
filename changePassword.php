<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change Password</title>
</head>

<body>
    <?php
    if (isset($_GET["error"])) {
        echo $_GET["error"];
    }
    ?>>
    Change your password
    <form action="changePassword_handler.php" method="POST">
        <label for="oldPassword">Old Password :</label>
        <input type="password" name="oldPassword" id="oldPassword">
        <label for="password"> New Password :</label>
        <input type="password" name="password" id="password">
        <label for="confirmPassword">Confirm Password :</label>
        <input type="password" name="confirmPassword" id="confirmPassword">
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
        <a href="homePage.php">Go Home</a>
    </form>
</body>

</html>