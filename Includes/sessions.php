<?php
session_start();

// Handle POST requests to update session state
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents('php://input'), true);

    if (!empty($data["name"]) && isset($data["value"])) {
        $_SESSION[$data["name"]] = intval($data["value"]); // Ensure value is integer
        echo $_SESSION[$data["name"]]; // Return updated value to client
    } else {
        http_response_code(400); // Bad Request
        echo "Invalid data received.";
    }
    exit();
}

// Set default session value if not already set
if (!isset($_SESSION["menuToggle"])) {
    $_SESSION["menuToggle"] = 0;
}
