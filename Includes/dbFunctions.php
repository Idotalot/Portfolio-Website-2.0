<?php
function readAboutMe($conn) {
        $sql = "SELECT * FROM AboutMe";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              return $row["Text"];
            }
          } else {
            echo "0 results";
          }
}

function updateAboutMe($data, $conn) {
    try {
        $stmt = $conn->prepare("UPDATE AboutMe SET text = $data");
        $stmt->execute();
        echo "AboutMe updated successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>