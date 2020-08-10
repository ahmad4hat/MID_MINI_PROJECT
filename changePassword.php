<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change Password</title>
</head>

<body>
    Change your password
    <form action="changePassword_handler" method="POST">
        <label for="oldPassword"> new Old Password :</label>
        <input type="password" name="oldPassword" id="oldPassword">
        <label for="password"> new Password :</label>
        <input type="password" name="password" id="password">
        <label for="confirmPassword">confirmPassword :</label>
        <input type="password" name="confirmPassword" id="confirmPassword">
    </form>
</body>

</html>