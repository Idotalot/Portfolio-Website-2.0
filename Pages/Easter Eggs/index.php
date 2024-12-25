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
    <link rel="stylesheet" href="../../Styles/eastereggs.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <script src="../../Scripts/eastereggs.js"></script>
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
                    <h1>
                        Alle Easter Eggs
                    </h1>
                    <div class="flex flex-row">
                        <div class="w-fit h-fit m-4">
                            <button onclick="presentBadge(this)" class="mx-auto block">
                                <img src="../../Images/wordpresslogo.png" class="badge w-28 h-28 border-2 border-black mx-auto bg-slate-200">
                                <input type="hidden" value="0">
                            </button>
                            <p class="badgeTag w-44 mt-2 text-center">
                                'WordPress? Hell nawh!'
                            </p>
                        </div>
                        <div class="w-fit h-fit m-4">
                            <button onclick="presentBadge(this)" class="mx-auto block">
                                <!-- <img src="" class="badge w-28 h-28 border-2 border-black mx-auto bg-slate-200"> -->
                                <div class="badge flex items-center w-28 h-28 border-2 border-black mx-auto bg-slate-200">
                                    <i class="fa fa-question text-6xl mx-auto" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" value="1">
                            </button>
                            <p class="badgeTag w-44 mt-2 text-center">
                                ???
                            </p>
                            <input type="hidden" value="1">
                        </div>
                    </div>
                    <h1>
                        Ontgrendeld
                    </h1>
                    <div class="flex flex-row">
                        <div class="w-fit h-fit m-4">
                            <button onclick="presentBadge(this)" class="mx-auto block">
                                <img src="../../Images/wordpresslogo.png" class="badge w-28 h-28 border-2 border-black mx-auto bg-slate-200">
                                <input type="hidden" value="0">
                            </button>
                            <p class="badgeTag w-44 mt-2 text-center">
                                'WordPress? Hell nawh!'
                            </p>
                        </div>
                        <div class="w-fit h-fit m-4">
                            <button onclick="presentBadge(this)" class="mx-auto block">
                                <!-- <img src="" class="badge w-28 h-28 border-2 border-black mx-auto bg-slate-200"> -->
                                <div class="badge flex items-center w-28 h-28 border-2 border-black mx-auto bg-slate-200">
                                    <i class="fa fa-question text-6xl mx-auto" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" value="1">
                            </button>
                            <p class="badgeTag w-44 mt-2 text-center">
                                ???
                            </p>
                            <input type="hidden" value="1">
                        </div>
                    </div>
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