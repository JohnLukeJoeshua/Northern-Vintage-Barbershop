<?php

include_once('dbconnect.php');

$id = "";
$username = "";
$password = "";        
$designation = "";

$errorMessage = "";
$successMessage =  "";      

if ($_SERVER['REQUEST_METHOD']== 'GET')
{
   if(!isset($_GET["id"]))
   {
        header("location:employee.php");
        exit;
   }
   
   $id = $_GET["id"];
   
   $sql = "SELECT * FROM employee WHERE id=$id";
   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_assoc($result);
   
   if(!$row)
   {
      header("location:employee.php");
      exit; 
   }
   
   $username = $row["username"];
   $password = $row["password"];       
   $designation = $row["designation"];

}
else{
    //POST method: Update the data of the employee
    
    $id = $_POST["id"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $designation = $_POST["designation"];
    
    do {
            if (empty($id) || empty($username) || empty($password) || empty($designation)){
            $errorMessage = "All the fields are required";
            break;
        }
        
        $sql = "UPDATE employee " .
               "SET username ='$username', password ='$password', designation ='$designation' " .
               "WHERE id = $id";
        
        $result = mysqli_query($con,$sql);
        
        if (!$result)
        {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        
        $successMessage = "Employee added correctly";
        header("location:employee.php");
        exit;
      
      
    } while(false);
}

?>

<!doctype html>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin - Updating New Employee Details</title>    
    </head>

        <div class="container my-5">
            <h1>Update Employee</h1><br>
        
        <?php
        if (!empty($errorMessage)){
            echo " <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            ";
        }
        
        ?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">User Name</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                </div> 
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
                </div> 
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Designation</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="designation" value="<?php echo $designation; ?>">
                </div> 
            </div> 
                
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div><br>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="employee.php" role="button">Cancel</a>
                </div>
            </div>
            <?php
            if (!empty($successMessage)){
            echo " 
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                        </div>
                </div   
            ";
            }
            ?>
            
        </form>
    </body>
</html>