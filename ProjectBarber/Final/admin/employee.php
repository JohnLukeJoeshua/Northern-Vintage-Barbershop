        <?php
            include "sidebar.php";
            
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css"></link>
    <title>Admin - Employee's Access</title>    
    </head>
    <body style="margin:50px;">
        <div class="container my-5">
        <h1>Employee's Access</h1>
        <a class="btn btn-primary" href="createnewemployee.php" role="button">New Employee</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Password</th>
                    <th>Designation</th>
                    <th>Created When</th>
                    <th>Action</th>
                </tr> 
            </thead>
            
            <tbody>
                <?php
                 include_once('dbconnect.php');
                 
                $sql = "SELECT * FROM employee;";
                $result = mysqli_query($con,$sql);

                while ($row = mysqli_fetch_assoc($result))
                    {
                       echo "<tr>
                           <td>" . $row["id"] . "</td>
                           <td>"  . $row["username"] . "</td>
                           <td>"  . $row["password"] . "</td>
                           <td>"  . $row["designation"] . "</td>
                           <td>"  . $row["created"] . "</td>
                           <td>
                               <a class ='btn btn-primary btn-sm' href='editemployee.php?id=$row[id]'> Update </a>
                               <a class ='btn btn-danger btn-sm' href='deleteemployee.php?id=$row[id]'> Delete </a>
                           </td>
                       </tr>";
                    }
                 ?>
            </tbody>
        </table>
        </div>
    </body>
</html>