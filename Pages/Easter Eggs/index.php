<?php
    include "../../Includes/sessions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "../../Includes/header.php";
    ?>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        include "../../Includes/menu.php";
    ?>
    <div id="pageWrapper">
        <?php
            // include "../../Includes/header.php";
            headerDisplay();
        ?>
        <div class="pageFormat">
            <div class="contentWrapper">
                <div class="content">
                    <?php
                        include "../../Includes/dbConnect.php";
                        include "../../Includes/infoBlocks.php";

                        displayInfoBlock($conn, $pageName);
                    ?>
                </div>
            </div>
            <?php
                include "../../Includes/footer.php";
            ?>
        </div>
        
    </div>
    </div>
</body>
</html>