<?php
    include "../../Includes/sessions.php";
    $loggedIn = $_SESSION["loggedIn"];

    if ($loggedIn == false) {
        header("Location: ../login");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "../../Includes/header.php";
        echo '<script src="'.$basePath.'/Scripts/404.js" defer></script>
            <script src="'.$basePath.'/Scripts/eastereggs.js" defer></script>'
    ?>
    
</head>
<body>
    <?php
        include "../../Includes/menu.php";
    ?>
    <div id="pageWrapper">
        <?php
            headerDisplay();
        ?>
        <div class="pageFormat">
            <div id="content" class="ml-auto mr-auto my-64 text-center">
            
            </div>      
            <?php
                include "../../Includes/footer.php";
            ?>
        </div>            
    </div>
    <style>
        #imageWrapper {
            margin-bottom: 50px;
            transition: all 1.2s ease-in-out;
        }
        img {
            transition: 0.3s;
        }
        .active {
            transform: translateY(-250px);
            transition: all 1.2s ease-out;
            transform: rotateY(180deg);
        }
    </style>
</body>
</html>