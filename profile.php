<h1>
    Profile

</h1>
<?php
//$file = fopen("data.txt", "r");

$con = mysqli_connect('localhost:3306', 'root', '', 'test');
$sql = "select * from users where id= '" . $_COOKIE["id"] . "' ";

$result = mysqli_query($con, $sql);


while ($row = mysqli_fetch_assoc($result)) {

    echo '<>' . $row['id'] . '</td>';
    // echo '<td>' . $row['password'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['userType'] . '</td>';


    echo '</tr>';
}








?>