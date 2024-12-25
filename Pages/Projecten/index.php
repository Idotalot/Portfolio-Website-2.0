<?php
    include "../../Includes/sessions.php";
    include "../../Includes/userAccess.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "../../Includes/header.php";
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
            <div class="contentWrapper">
                <h1 class="m-5"><cite>Mijn projecten</cite></h1>
                <div class="content">
                    <h3 class="font-bold px-3.5">
                        Mijn projecten
                    </h3>
                    
                </div>
            </div>
            <?php
                include "../../Includes/footer.php";
            ?>
        </div>            
    </div>
</body>
</html>