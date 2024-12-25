<?php
session_start(); // Start session for session variables
include "dbConnect.php";

// DATA DEFINITION & HANDLING (IF SENT ONLY)

$data = json_decode(file_get_contents('php://input'), true);

if ($data != null) {
    // header("Location: ../Pages/Startpagina");

    $username = $data["userValue"];
    $password = $data["passValue"];
  
    // Use prepared statements to prevent SQL Injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE `Username` = ? AND `Password` = ?");
    $stmt->bind_param("ss", $username, $password); // "ss" indicates both are strings
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Set session variable and redirect
        $_SESSION["loggedIn"] = [
            "access" => true,
            "user" => $username
        ];

        echo json_encode([
            "success" => true,
            "redirect" => "../Startpagina", // Redirect to this page
        ]);
        exit(); // Ensure script stops after redirect
    } else {
        echo false;;
    }
  
    $stmt->close(); // Close the prepared statement
}

  
