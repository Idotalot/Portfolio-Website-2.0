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

                        echo '<div onclick=editAboutMe() class="contentInformation">
                                <button onclick="editAboutMe(this)" class="text-left w-full h-full">
                                    <textarea oninput="autoGrow(this)" onblur="updateInfo(\''.$pageName.'\', this)" class="w-full py-0.5 resize-none px-3.5 focus:border-none focus:rounded-lg focus:py-0.5 focus:px-3.5 focus:bg-[aliceblue] hover:py-0 hover:border-solid hover:border-2 hover:border-zinc-950 hover:px-3 hover:rounded-lg">' .
                                        readAboutMe($conn, $pageName) .
                                    '</textarea>
                                </button>                                
                            </div>';
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