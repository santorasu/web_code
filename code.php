<?php

    include 'connection.php';

    $un = $_POST['username'];
    $pass = $_POST['password'];
    $fn = $_POST['fn'];
    $gender = $_POST['gender'];

    $query = "INSERT INTO info(username, upassword, full_name, gender) 
                VALUES('$un', '$pass', '$fn', '$gender')";

    $run = mysqli_query($con, $query);
    
    if(!$run){
        echo "<br>submission failed!";
    } else{
        header("Location: list.php");
    }
?>