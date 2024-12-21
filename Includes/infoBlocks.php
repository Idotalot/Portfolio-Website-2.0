<?php
include "dbConnect.php";

// DATA DEFINITION & HANDLING (IF SENT ONLY)
$data = null;

if(json_decode(file_get_contents('php://input'), true) != null) {
  $data = json_decode(file_get_contents('php://input'), true);
  
  switch ($data["type"]) {
    case 'UPDATE':
      echo $data["page"];
      updateInfoBlock($conn, $data);
      break;
    
    default:
      # code...
      break;
  }
}

// SQL READ
function readAboutMe($conn, $webpage) {
  $sql = "SELECT * FROM AboutMe WHERE `Page` = '$webpage'";
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

// SQL UPDATE
function updateInfoBlock($conn, $data) {
  $webpage = $data["page"];
  $value = $data["value"];
  
  try {
      $sql = 'UPDATE AboutMe SET `Text` = ? WHERE page = ?'; 

      // Prepared statement
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ss', $value, $webpage);

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