<?php

    include 'connection.php';

    $uname = $_POST['uname'];
    $ufn = $_POST['ufn'];

    $sql = "UPDATE info SET full_name = '$ufn' WHERE username = '$uname'";

    $run = mysqli_query($con, $sql);

    if(!$run){
        echo 'update failed!';
    } else{
        header("Location: list.php");
    }
?>