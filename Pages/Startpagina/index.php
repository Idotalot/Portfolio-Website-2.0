<?php
    include "../../Includes/sessions.php";
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
                <h1 class="m-5"><cite>"Hello World!"</cite></h1>
                <div class="content">
                    <h3 class="font-bold px-3.5">
                        Over mij
                    </h3>
                    <?php
                        include "../../Includes/dbConnect.php";
                        include "../../Includes/infoBlocks.php";

                        displayInfoBlock($conn, $pageName);
                    ?>
                    <h3>
                        Diplomas / Certificaten
                    </h3>
                    <p>
                        Een lijst met mijn behaalde diplomas & certificaten
                    </p>
                    <table class="mt-5">
                        <thead>
                            <tr>
                                <th>Diploma</th>
                                <th>Omschrijving</th>
                                <th>Vanaf - Tot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="evenTableItem">
                                <td>MBO 4</td>
                                <td>Software Development (Versneld Traject)</td>
                                <td>2021 - 2024</td>
                            </tr>
                            <tr>
                                <td>VMBO-T</td>
                                <td>Profiel: Techniek</td>
                                <td>2018 - 2021</td>
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
</body>
</html>