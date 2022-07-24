        <?php
            session_start();
            unset($_SESSION["username"]);
            unset($_SESSION["password1"]);
            header("Location:login.php");
        ?>