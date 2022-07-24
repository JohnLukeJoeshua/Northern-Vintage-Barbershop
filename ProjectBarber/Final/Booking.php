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

if (isset($_POST['book']))
{    
// There are no errors so Form data in Variables
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = date('Y-M-D', strtotime($_POST['date']));
$time = $_POST['time'];
$service = $_POST['service'];
$b=implode(',',$service);

$qry = "INSERT INTO `appointment`(`name`, `phone`,`email`, `date`, `time`, `service`) VALUES ('$name','$phone','$email','$date','$time','$b')";

$insert = mysqli_query($con,$qry);


if (!$insert){
    $_SESSION['msg'] = 'Feedback Failed to save, Please try again';
    header("Location:Make Appointment.php");  
}
else{
    $_SESSION['msg'] = 'Feedback Saved, Thank You!!!';
    header("Location:Make Appointment.php"); 
}
}
?>