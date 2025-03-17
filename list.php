<?php

    include 'connection.php';

    $query = "SELECT * FROM info";
    $data = mysqli_query($con, $query);

?>

<html>
    <head>
        <style>
            table, tr, th, td{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h1>List</h1>
        <?php
            if(mysqli_num_rows($data) > 0){
                echo "<table>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Gender</th>
                        </tr>";
                while($row = mysqli_fetch_assoc($data)){
                    echo "<tr><td>".$row['full_name']."</td><td>".$row['username']."</td><td>".$row['gender']."</td></tr>";
                }
                echo "</table>";
            } else{

            }
        ?>

        <br><br>
        <form action="delete.php" method="post">
            <input type="text" id="del" name="del" placeholder="enter username to deleter">
            <input type="submit" value="DELETE">
        </form>

        <br><br>
        <form action="update.php" method="post">
            <input type="text" id="uname" name="uname" placeholder="enter username to update">
            <input type="text" id="ufn" name="ufn" placeholder="enter the updated name">
            <input type="submit" value="UPDATE">
        </form>
    </body>

</html>