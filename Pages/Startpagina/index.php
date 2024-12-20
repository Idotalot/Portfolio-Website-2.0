<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i.Dot - Start</title>
    <link rel="stylesheet" href="../../Styles/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../Styles/tailwind.css">
    <script src="../../Scripts/script.js" defer></script>
    <script src="../../Scripts/start.js" defer></script>
</head>
<body>
    <?php
        include "../../Includes/menu.php";
    ?>
    <div id="pageWrapper">
        <?php
            include "../../Includes/header.php";
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
                        include "../../Includes/start.php";

                        echo '<div onclick=editAboutMe() class="contentInformation">
                                <button onclick="editAboutMe(this)" class="text-left w-full h-full">
                                    <textarea oninput="autoGrow(this)" onblur="updateInfo(this)" class="w-full py-0.5 resize-none px-3.5 focus:border-none focus:rounded-lg focus:py-0.5 focus:px-3.5 focus:bg-[aliceblue] hover:py-0 hover:border-solid hover:border-2 hover:border-zinc-950 hover:px-3 hover:rounded-lg">' .
                                        readAboutMe($conn) .
                                    '</textarea>
                                </button>                                
                            </div>';
                    ?>
                    <!-- <p class="mb-5">Daarnaast heb ik al jaren een zeer grote passie voor fitness en ben ik ook werkzaam in een sportschool.</p> -->
                    
                    <h3>
                        Diplomas / Certificaten
                    </h3>
                    <p>
                        Een lijst met mijn behaalde diplomas & certificaten
                    </p></p>
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