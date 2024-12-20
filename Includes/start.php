<?php

include "dbConnect.php";

$data = null;

if(json_decode(file_get_contents('php://input'), true) != null) {
  $data = json_decode(file_get_contents('php://input'), true);
  
  switch ($data["type"]) {
    case 'UPDATE':
      updateAboutMe($data, $conn);
      break;
    
    default:
      # code...
      break;
  }
}



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
  $value = $data["value"];

  try {
      $sql = 'UPDATE AboutMe SET `Text` = ? WHERE id = 1'; 

      // Prepared statement
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('s', $value);

      // Execute the statement
      if ($stmt->execute()) {
          echo "Record updated successfully";
      } else {
          echo "Error updating record: " . $stmt->error;
      }

      $stmt->close();  
  } catch (Exception $e) {
      echo "Error: " . $e->getMessage();
  }
}
?>