<?php
print_r($_POST);

if (isset($_POST['submit'])) {

    if (empty($_POST['oldPassword']) || empty($_POST['password']) || (empty($_POST['newPassword']))) {
        echo "empty ";
        header('location: changePassword.php/error=emptyField');
    }
    
}
