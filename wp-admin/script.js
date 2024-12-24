let avoidDiv = document.getElementById('avoidDiv');
let textInput = document.getElementById("textInput");

let generateTextIndex = 0;
let loginButton = document.querySelector("button");

window.addEventListener('load', () => {
    const image = document.getElementById('imageWrapper');

    const interval = setTimeout(() => {
        image.classList.add("active");        
    }, 500);

    setTimeout(() => {
        image.querySelector("img").src = "../Images/sickmode.png";
        image.querySelector("img").classList.add("reversedImage");
    }, 1100);
    
    setTimeout(() => {
        // Wait until the page has loaded
        textInput.innerHTML = "";
        
        const textToAdd = [
            "Easter egg - 'WordPress? Hell nawh!' gevonden!",
            "Zoek rond op de website voor meer easter eggs..."
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
    }, 2500);
});

function generateText() {
    loginButton.removeAttribute("onclick");

    const texts = [
        "Was het nog niet duidelijk dat deze pagina nep is?", 
        "Nahh dit werkt niet man.", 
        "Wat dacht je nou?", 
        "Hier bereik je echt niks mee.", 
        "Blijf het vooral proberen (niet).", 
        "Dit is tijdverspilling.", 
        "Zoek alsjeblieft een leven.",
        "Waarom blijf je het proberen?",
        "Jij denkt ook echt dat overal iets achter zit.",
        "Dit is al de 10e keer.",
        "Dit noem je nou paranoia.",
        "Zelfs ik wordt er moe van, en ik ben niet eens echt.",
        "Ik heb dit moeten schrijven omdat het BLIJKBAAR nog NIET DUIDELIJK WAS dat hier NIKS te zoeken valt.",
        "Ik begin echt pissig te worden nu.",
        "Ga iemand anders lastig vallen.",
        "os.remove(C:\\Windows\\System32\\)",
        "Misschien is het duidelijker als ik de knop aanpas.",
        "Echt waar, hoe DOM kun je zijn.",
        "Oke ik hou hier mee op want dit levert me echt niks op. Doei. (P.S. Geen knop meer voor jou!)"
    ];

    let text = texts[generateTextIndex]

    if(generateTextIndex == 16) {
        setTimeout(() => {
            loginButton.innerText = "NIET OP KLIKKEN!";
            loginButton.classList.replace("bg-sky-700", "bg-red-500");
        }, 3000);        
    } else if (generateTextIndex == 18) {
        loginButton.removeAttribute("onclick");
        setTimeout(() => {
            loginButton.remove();
        }, 5000);  
    }
    generateTextIndex++;

    let currentIndex = 0;
    
    textInput.innerHTML = "";

    const typingInterval = setInterval(() => {
        if (currentIndex < text.length) {
            textInput.innerHTML += text[currentIndex]; // Add the next letter
            currentIndex++;
        } else {
            clearInterval(typingInterval); // Stop typing when done
            loginButton.setAttribute("onclick", "generateText()");
        }
    }, 50); // Typing speed for letters   
}