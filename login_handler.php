<?php
session_start();

if (isset($_POST['submit'])) {

    $id         = $_POST['id'];
    $password     = $_POST['password'];

    if (empty($id) || empty($password)) {
        header('location: login.php?error=invalid_username/password');
        exit();
    } else {

        $con = mysqli_connect('localhost:3306', 'root', '', 'test');
        $sql = "select * from users where id='" . $id . "' and password='" . $password . "'";

        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

        if (count($row) > 0) {
            $_SESSION['status'] = "OK";
            header('location: homePage.php');
        } else {
            header('location: login.php?error=invalid_username/password');
        }
    }
} else {
    //echo "invalid request";
    header('location: login.php');
}
