<?php

    include("contactConfig.php");

    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    extract($_POST);
    $sql = "INSERT INTO `contact-data`(`firstname`, `lastname`, `email`, `message`) 
    VALUES ('".$firstname."','".$lastname."','".$email."','".$message."')";
    $result = $mysqli->query($sql);

    if(!$result){
        echo '<script>alert("Message not sent")</script>';
        header("location: contact.php");
    }
    else{
        echo '<script>window.location.href=" contact.php";
        alert("Thank you for contacting us!");</script>';
    }
        $mysqli -> close();
?>