<?php
    include "Includes/dbConnect.php";

    if (isset($_GET["code"])) {
        $getCode = $_GET["code"];
        $dbCode;

        $sql = "SELECT * FROM entry";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $dbCode = $row["code"];
                echo $dbCode;
            }
        } else {
            echo "0 results";
        }

        if ($getCode == $dbCode) {
            header("Location: Pages/Startpagina");
        } else {
            header("Location: Pages/Login");
        }
    } else {
        echo "noggers";
    }

    
?>