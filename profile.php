<h1>
    Profile

</h1>
<?php
//$file = fopen("data.txt", "r");

$con = mysqli_connect('localhost:3306', 'root', '', 'test');
$sql = "select * from users where id= '" . $_COOKIE["id"] . "' ";

$result = mysqli_query($con, $sql);


while ($row = mysqli_fetch_assoc($result)) {

    echo '<h2> ID = ' . $row['id'] . '</h2>';
    // echo '<td>' . $row['password'] . '</td>';
    echo '<h2> Name =' . $row['name'] . '</h2>';
    echo '<h2> Email =' . $row['email'] . '</h2>';
    echo '<h2> User Type=' . $row['userType'] . '</h2>';


    echo '</br>';
}








?>