<?php
    $loggedIn = $_SESSION["loggedIn"];
    $codeEntry = $_SESSION["codeEntry"];

    $user;
    $accountHref;

    if ($loggedIn["access"] == true) {
        $user = $loggedIn["user"];
        $accountHref = "../Admin";
    } else if ($codeEntry["access"] == true) {
        $user = $codeEntry["platform"];
        $accountHref = "../Login";
    }


    $hidden = "hidden";
    $icon = "fa-navicon";

    if ($_SESSION["menuToggle"] == 0) {
        $hidden = "hidden";
        $icon = "fa-navicon";
    } else if ($_SESSION["menuToggle"] == 1) {
        $hidden = "";
        $icon = "fa-remove";
    }

    echo '
    <div id="menuWrapper">
        <div class="menuDiv">
            <button class="menuButton" style="width: 3rem;" onclick="toggleMenu()">
                <i id="navBarToggle" class="transition-all duration-300 menuItem fa '.$icon.'"></i>
                <input id="navBarToggleValue" type="hidden" value="'.$_SESSION["menuToggle"].'">
            </button>
        </div>
        <div class="menuDiv menuList">
            <a class="menuButton" href="../Startpagina">
                <div style="display: flex; padding: 12px;">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <p class="menuButtonText '.$hidden.'">Startpagina</p>
                </div>
            </a>
            <a class="menuButton" href="../Ervaringen">
                <div style="display: flex; padding: 12px;">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                    <p class="menuButtonText '.$hidden.'">Ervaringen</p>
                </div>
            </a>
            <a class="menuButton" href="../Projecten">
                <div style="display: flex; padding: 12px;">
                    <i class="fa fa-folder" aria-hidden="true"></i>
                    <p class="menuButtonText '.$hidden.'">Projecten</p>
                </div>
            </a>  
            <a class="menuButton" href="../Contact">
                <div style="display: flex; padding: 12px;">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <p class="menuButtonText '.$hidden.'">Contact</p>
                </div>
            </a>
            <a class="menuButton" href="../Easter Eggs">
                <div class="text-yellow-400" style="display: flex; padding: 12px;">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <p class="menuButtonText '.$hidden.'">Easter Eggs</p>
                </div>
            </a>
        </div>
        <div class="menuDiv menuList hidden absolute bottom-0">
            <a class="menuButton" href="'.$accountHref.'">
                <div class="flex p-3">
                <!-- <div style="display: flex; padding: 12px;"> -->
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <p class="menuButtonText '.$hidden.'">'.$user.'</p>
                </div>
            </a>
        </div>
    </div>'
?>
