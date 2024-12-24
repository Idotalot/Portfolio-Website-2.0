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

function displayInfoBlock($conn, $pageName) {
  echo '
    <div class="contentInformation">
      <textarea oninput="autoGrow(this)" onblur="updateInfo(\''.$pageName.'\', this)" class="w-full py-0.5 resize-none px-3.5 rounded-lg transition duration-300 focus:border-none focus:py-0.5 focus:px-3.5 focus:bg-[aliceblue] hover:py-0 hover:border-solid hover:border-2 hover:border-zinc-950 hover:px-3 hover:rounded-lg">' .
        readAboutMe($conn, $pageName) .
      '</textarea>                     
    </div>';
}
?>