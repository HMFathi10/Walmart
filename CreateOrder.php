<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $localhost = "localhost";
            $dbconnection = "root";
            $dbpassword = "rootroot";
            $dbname = "Walmart";
            $conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
            $sql = "call Record()";
            $results = mysqli_query($conn, $sql);
            if (!$results) {
                die("Error");
            }
            header("Location: http://localhost/Walmart/Home.php");
            die();
        ?>
    </body>
</html>
