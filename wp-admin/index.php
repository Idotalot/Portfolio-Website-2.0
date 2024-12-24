<link rel="stylesheet" href="../Styles/tailwind.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script.js" defer></script>
<div class="flex flex-col mx-auto w-full">
    <div id="imageWrapper" class="bg-white mx-auto w-fit border-2 border-sky-700" style="border-radius: 50%" style="z-index: 3">
        <a href="https://www.youtube.com/watch?v=hwn3Gqn1a2k">
            <img src="../Images/wordpresslogo.png" class="w-28 h-28 hover:w-36 hover:h-36" style="border-radius: 50%">
        </a>
    </div>
    <div class="w-fit mx-auto">
        <div id="avoidDiv" class="mx-auto rounded-sm border-stone-400 border-2 p-10 bg-white w-fit shadow-2xl" style="z-index: 3;">
            <div class="flex flex-col">
                <label class="text-stone-600">Gebruikersnaam of e-mailadres</label>
                <input type="text" value="" class="border-2 border-stone-400 rounded-md p-2 w-72">
            </div>
            <div class="flex flex-col mt-4">
                <label class="text-stone-600">Wachwoord</label>
                <input type="password" value="" class="border-2 border-stone-400 rounded-md p-2">
            </div>
            <div class="mt-4 relative">
                <input type="checkbox">
                <label class="text-stone-600">Onthoud mij</label>
                <button onclick="generateText()" class=" bg-sky-700 text-white p-2 rounded-md right-0 absolute">
                    Log In
                </button>
            </div>
        </div>
        <div class="mt-8 px-8 text-stone-600">
            <p>
                Wachtwoord vergeten?
            </p>
            <p class="mt-6">
                <a href="../Pages/Startpagina/">
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Ga naar
                    <?php
                        echo basename(dirname(getcwd()));
                    ?>
                </a>
                
            </p>
        </div>
    </div>
    
    <div class="mx-auto h-10 items-end flex">
        <p id="textInput" class="mx-auto" style='font-family: "Source Code Pro", serif;'>

        </p>
    </div>
    
</div>
<style>
    #imageWrapper {
        margin-bottom: 50px;
        transition: all 1.2s ease-in-out;
    }
    img {
        transition: 0.3s;
    }
    body {
        background-color: aliceblue;
        display: flex;
        align-items: center;
    }
    .active {
        /* transform: translateY(-250px);
        transition: all 1.2s ease-out; */
        transform: rotateY(180deg);
    }
</style>