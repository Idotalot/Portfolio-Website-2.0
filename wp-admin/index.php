<link rel="stylesheet" href="../Styles/tailwind.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
<div class="flex flex-col mx-auto">
    <div id="imageWrapper" class="bg-white mx-auto w-fit border-2 border-stone-400" style="border-radius: 50%" style="z-index: 3">
        <img src="../Images/sickmode.png" class="w-28 p-2" style="border-radius: 50%">
    </div>
    <div class="mx-auto rounded-sm border-stone-400 border-2 p-10 bg-white w-fit shadow-2xl" style="z-index: 3;">
        <!-- <img src="https://pbs.twimg.com/media/FtUr5AcakAAdoTn.jpg" class="mx-auto"> -->
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
            <label class="text-stone-600">Remember me</label>
            <button class=" bg-sky-700 text-white p-2 rounded-md right-0 absolute">
                Log In
            </button>
        </div>
    </div>
    <div class="mx-auto h-4">
        <p id="textInput" class="mx-auto" style='font-family: "Source Code Pro", serif;'>

        </p>
    </div>
    
</div>



<style>
    #imageWrapper {
        margin-bottom: -200px;
    }
    body {
        background-color: aliceblue;
        display: flex;
        align-items: center;
    }
    .active {
        transform: translateY(-250px);
        transition: all 1.2s ease-out;
    }
</style>
<script>
    let textInput = document.getElementById("textInput");

window.addEventListener('load', () => {
    const interval = setTimeout(() => {
        const image = document.getElementById('imageWrapper');
        image.classList.add("active");
        
    }, 500)
    
    setTimeout(() => {
        // Wait until the page has loaded

        const textToAdd = [
            "Easter egg #1 gevonden!",
        ];

        let i = 0; // Tracks the current string

        const typeText = (text, callback) => {
            let currentIndex = 0;

            const typingInterval = setInterval(() => {
                if (currentIndex < text.length) {
                    textInput.innerHTML += text[currentIndex]; // Add the next letter
                    currentIndex++;
                } else {
                    clearInterval(typingInterval); // Stop typing when done
                    callback(); // Call the next action
                }
            }, 50); // Typing speed for letters
        };

        const startTyping = () => {
            if (i >= textToAdd.length) return; // Stop when all texts are displayed

            textInput.innerHTML = ""; // Clear the input before animating the new text
            typeText(textToAdd[i], () => {
                i++; // Move to the next string
                setTimeout(startTyping, 1250); // Wait 2 seconds before starting the next text
            });
        };

        startTyping(); // Begin the process
    }, 2500)
});

</script>