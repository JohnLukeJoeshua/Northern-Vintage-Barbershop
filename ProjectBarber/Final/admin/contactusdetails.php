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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css"></link>
    <title>Admin - Contact Us Details</title>    
    </head>
    <body style="margin:50px;">
        <br>
        <h1>Contact Us Details</h1>
        
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr> 
            </thead>
            
            <tbody>
                <?php
                 include_once('dbconnect.php');
                 
                $sql = "SELECT * FROM contactus;";
                $result = mysqli_query($con,$sql);

                while ($row = mysqli_fetch_assoc($result))
                    {
                       echo "<tr>
                           <td>" . $row["id"] . "</td>
                           <td>"  . $row["name"] . "</td>
                           <td>"  . $row["email"] . "</td>
                           <td>"  . $row["msg"] . "</td>
                           <td>
                               <a class ='btn-danger btn-sm' href='deletecontactus.php?id=$row[id]'> Delete </a>
                           </td>
                       </tr>";
                    }
                 ?>
            </tbody>

        </table>
    </body>
</html>