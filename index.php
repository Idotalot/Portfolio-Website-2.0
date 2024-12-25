<?php
include "Includes/dbConnect.php";
include "Includes/sessions.php";

if (isset($_GET["code"])) {
    $getCode = $_GET["code"];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT `code`, `platform` FROM entry WHERE `code` = ?");
    $stmt->bind_param("s", $getCode);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $dbCode = $row["code"];
        $dbPlatform = $row["platform"];

        $_SESSION["codeEntry"] = [
            "access" => true,
            "platform" => $dbPlatform
        ];
        
        header("Location: Pages/Startpagina");
    } else {
        // No matching code found
        echo "0 results";
        // Optionally redirect to the login page
        header("Location: Pages/Login");
    }

    $stmt->close();
    $conn->close();
} else {
    // No code provided in the GET request
    echo "No code provided.";
    // Optionally redirect to the login page
    header("Location: Pages/Login");
}
?>
