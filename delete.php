<?php

    include 'connection.php';

    $val = $_POST['del'];

    $sql = "DELETE FROM info WHERE username = '$val'";

    $run = mysqli_query($con, $sql);

    if(!$run){
        echo 'deletion failed!';
    } else{
        header("Location: list.php");
    }
?>