<?php


if (isset($_GET["id"]))
{
    $id = $_GET["id"];
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "northernvintagebarbershop";

    $con = new mysqli($host,$user,$pass,$db);
    
    $sql = "DELETE FROM appointment WHERE id=$id";
    $con ->query($sql);
}

header("location:Appointment.php");
exit;

?>