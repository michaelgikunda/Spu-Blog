<?php
    //Database Connection script
    include 'dbcon.php';

    //Fetching Credentials from form
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = sha1($_POST['password']);  

    $sql = "INSERT INTO credentials(name, email, password) VALUES ('$Name', '$Email','$Password')";
    $results = mysqli_query($dbconn, $sql);

    if ($results){
        header("Location: home.php");
    }
    else{
        echo "Transfer Failed!";
    }
?>