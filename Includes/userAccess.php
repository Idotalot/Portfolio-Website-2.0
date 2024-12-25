<?php
$codeEntry = $_SESSION["codeEntry"];
$loggedIn = $_SESSION["loggedIn"];

if ($loggedIn["access"] == false) {
    if ($codeEntry["access"] == false) {
        header("Location: ../Login");
    }
}