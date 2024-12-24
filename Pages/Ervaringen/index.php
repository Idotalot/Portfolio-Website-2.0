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
                    <h3>
                        Mijn ervaringen
                    </h3>
                    <p>
                        Een lijst met mijn werkervaringen
                    </p>
                    <table style="margin-top: 20px;">
                        <thead>
                            <tr>
                                <th>Bedrijf</th>
                                <th>Functie</th>
                                <th>Vanaf - Tot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="evenTableItem">
                                <td><a href="https://www.maasenwaalfit.nl/">Maas & Waal Fit</a></td>
                                <td>Algemeen Medewerker</td>
                                <td>2024 - Momenteel</td>
                            </tr>
                            <tr>
                                <td><a href="https://politie.nl/">Politie Nederland</a></td>
                                <td><strong>(STAGE)</strong> Stagiar Software Development</td>
                                <td>2024 - 2024</td>
                            </tr>
                            <tr class="evenTableItem">
                                <td><a href="https://www.jumbo.com/">Jumbo Supermarkten</a></td>
                                <td>Vulploeg Medewerker</td>
                                <td>2020 - 2024</td>
                            </tr>
                            <tr>
                                <td><a href="https://www.padgin.com/nl/">Padgin</a></td>
                                <td><strong>(STAGE)</strong> Stagiar Software Development</td>
                                <td>2022 - 2023</td>
                            </tr>
                        </tbody>
                    </table>
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