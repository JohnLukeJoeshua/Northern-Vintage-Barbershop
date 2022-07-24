<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "northernvintagebarbershop";

$con = new mysqli($host,$user,$pass,$db);
if (!$con)
{
    echo "There are some problems while connecting to the Database";
}

session_start();

// There are no errors so Form data in Variables
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$qry = "INSERT INTO `contactus`(`name`, `email`, `msg`) VALUES ('$name','$email','$msg')";

$insert = mysqli_query($con,$qry);

if (!$insert){
    $_SESSION['msg'] = 'Feedback Failed to save, Please try again';
    header("Location:Contact Us.php");  
}
else{
    $_SESSION['msg'] = 'Feedback Saved, Thank You!!!';
    header("Location:Contact Us.php"); 
}
?>