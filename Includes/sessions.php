<?php
session_start();

// Handle POST requests to update session state
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $rawData = file_get_contents('php://input');
    $data = json_decode($rawData, true);

    if (!empty($data["name"]) && isset($data["value"])) {
        $_SESSION[$data["name"]] = $data["value"];

        // Debug: Updated session state
        echo "Updated Session: " . print_r($_SESSION, true) . PHP_EOL;
    } else {
        http_response_code(400); // Bad Request
        echo "Invalid data received.";
    }
    exit();
}

// Set default session values if not already set
if (!isset($_SESSION["menuToggle"])) {
    $_SESSION["menuToggle"] = 0;
}
if (!isset($_SESSION["loggedIn"])) {
    $_SESSION["loggedIn"] = [
        "access" => false,
        "user" => null
    ];
}
if (!isset($_SESSION["codeEntry"])) {
    $_SESSION["codeEntry"] = [
        "access" => false,
        "platform" => null
    ];
}
