<?php
// Choose filename based on hosting location "Locally Development or Live Server"
    $serverName = $_SERVER["SERVER_NAME"];
    $basePath;
    if ($serverName == "localhost") {
        $basePath = "/Portfolio-Website-2.0/";
    }
