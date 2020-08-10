<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
</head>

<body>
    <table border="1px">
        <?php
        $file = fopen("data.txt", "r");

        $con = mysqli_connect('localhost:3306', 'root', '', 'test');
        $sql = "select * from users ";

        $result = mysqli_query($con, $sql);


        while ($row = mysqli_fetch_assoc($result)) {

            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['password'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['userType'] . '</td>';


            echo '</tr>';
        }








        ?>

    </table>
</body>

</html>