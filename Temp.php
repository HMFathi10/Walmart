<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $Quentity = $_POST["Quentity"];
        $Code = array_pop($_POST);
        if (!empty($Quentity)) {
            $localhost = "localhost";
            $dbconnection = "root";
            $dbpassword = "rootroot";
            $dbname = "Walmart";
            $conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
            $sql = "select CategoryId from Product where Code = $Code";
            $results = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($results);
            $sql = "call InsertIntoTemp('" . $Code . "','" . $Quentity . "')";
            $results = mysqli_query($conn, $sql);
            if (!$results) {
                die("Error");
            }
            header("Location: http://localhost/Walmart/VideoGamesPage.php?id='" . $row['CategoryId'] . "'");
            die();
        }
        ?>
    </body>
</html>
