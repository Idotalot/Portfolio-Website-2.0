<?php
    include "../../Includes/login.php";

    function redirect() {
        header("Location: ../Startpagina");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "../../Includes/header.php";    
    ?>
    <script src="../../Scripts/login.js"></script>
</head>
<body class="h-screen flex items-center">
    <div class="mx-auto bg-white p-10 align-middle shadow-2xl rounded-lg">
        <div class="flex flex-col">
            <label class="text-stone-600">Gebruikersnaam</label>
            <input id="usernameInput" type="text" value="" class="p-1 w-72 border-2 border-stone-400 rounded-lg focus:bg-[aliceblue] duration-150">
        </div>
        <div class="flex flex-col mt-4">
            <label class="text-stone-600">Wachtwoord</label>
            <input id="passwordInput" type="password" value="" class="p-1 w-72 border-2 border-stone-400 rounded-lg focus:bg-[aliceblue] duration-150">
        </div>
        <div class="relative block mt-4 h-fit">
            <button onclick="login()" class="w-full bg-black text-white p-2 rounded-lg duration-150 hover:bg-stone-700">Inloggen</button>
        </div>
        <div class="mt-4">
            <hr class="h-px 5 border-0 text-black bg-stone-400">
        </div>
        <div class="flex flex-col mt-2">
            <label class="text-stone-600">Code</label>
            <input id="codeInput" type="text" value="" class="p-1 w-72 border-2 border-stone-400 rounded-lg focus:bg-[aliceblue] duration-150">
        </div>
        <div class="relative block mt-4 h-fit">
            <button onclick="codeValidation()" class="w-full bg-black text-white p-2 rounded-lg duration-150 hover:bg-stone-700">Valideren</button>
        </div>
    </div>
</body>
</html>