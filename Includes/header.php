<?php
    include "basePath.php";

    $pageName = basename(getcwd());

    function headerDisplay() {
        global $pageName;
        echo '<h1 class="m-5">Portfolio &rarr; '. $pageName .'</h1>';
    }

    function titleDisplay() {
        global $pageName;
        echo $pageName;
    }

    echo '
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$pageName.'</title>
    <link rel="stylesheet" href="'.$basePath.'Styles/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="'.$basePath.'Styles/tailwind.css">
    <!-- <script>let navbarToggleValue = '.json_encode($_SESSION["menuToggle"]).';</script> -->
    <script src="'.$basePath.'Scripts/script.js" defer></script>
    <script src="'.$basePath.'Scripts/infoBlocks.js" defer></script>'
?>

