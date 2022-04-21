<?php

$emri=$_POST['userName'];
$mbiemri=$_POST['userSurname'];
$dita=$_POST['userDay'];
$muaji=$_POST['userMonth'];
$viti=$_POST['userYear'];
$gjinia=$_POST['userGender'];
$email=$_POST['userEmail'];
$password=$_POST['userPassword'];
$confirm=$_POST['userConfirm'];
$capitalRegex = "/[A-Z]/";
$numberRegex = "/[0-9]/";
if(preg_match("/^[A-Z]/",$emri) == false){
    header("location: ../Login/logout.php");
}
else if(preg_match("/^[A-Z]/",$mbiemri) == false){
    header("location: ../Login/logout.php");
}
else if($dita == 0 || $muaji == 0 || $viti == 0){
    header("location: ../Login/logout.php");
}
else if($gjinia == 0){
    header("location: ../Login/logout.php");
}
else if(strlen($password) < 8){
    header("location: ../Login/logout.php");
}
else if(preg_match($capitalRegex, $password) == false || preg_match($numberRegex, $password) == false){
    header("location: ../Login/logout.php");
}
else if($password !== $confirm){
    header("location: ../Login/logout.php");
}
else{
    header("location: ../HomePage/index.php");
}
?>