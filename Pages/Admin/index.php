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
    ?>
    <script src="../../Scripts/start.js" defer></script>
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
            <div class="contentWrapper">
                <h1 class="m-5"><cite>"Het Commando Centrum"</cite></h1>
                <div class="content">
                    <h3 class="font-bold px-3.5">
                        Portfolio Beheer
                    </h3>
                    <p>
                        Binnenkort meer...
                    </p>
                </div>
            </div>
            <?php
                include "../../Includes/footer.php";
            ?>
        </div>            
    </div>
</body>
</html>