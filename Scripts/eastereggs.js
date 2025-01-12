

let frontImages = [
    "wordpresslogo.png",
    "CatGifs/catshocked.gif"
]

let backImages = [
    "sickmode.png",
    "CatGifs/larry.jpg"
]

function presentBadge(badgeContainer) {
    let badgeIndex = badgeContainer.querySelector("input").value
    console.log(badgeIndex)
    let badge = badgeContainer.querySelector("img");
    badge.classList.add("rotateY180");

    setTimeout(() => {
        badge.src = "../../Images/"+backImages[badgeIndex];
    }, 600);

    setTimeout(() => {
        badgeContainer.setAttribute("onclick", "returnBadge(this)");
    }, 1200);
}

function returnBadge(badgeContainer) {
    let badgeIndex = badgeContainer.querySelector("input").value
    let badge = badgeContainer.querySelector("img");
    badge.classList.remove("rotateY180");
    
    setTimeout(() => {
        badge.src = "../../Images/"+frontImages[badgeIndex];
    }, 600);

    setTimeout(() => {
        badgeContainer.setAttribute("onclick", "presentBadge(this)");
    }, 1200);
}


let avoidDiv = document.getElementById('avoidDiv');
let textInput = document.getElementById("textInput");

let badgeName = document.getElementById("badgeName").value;

let generateTextIndex = 0;
let loginButton = document.querySelector("button");

window.addEventListener('load', () => {
    const image = document.getElementById('imageWrapper');

    const interval = setTimeout(() => {
        image.classList.add("active");        
    }, 500);

    setTimeout(() => {
        image.querySelector("img").src = badgePath;
        image.querySelector("img").classList.add("reversedImage");
    }, 1100);
    
    setTimeout(() => {
        // Wait until the page has loaded
        textInput.innerHTML = "";
        
        const textToAdd = [
            "Easter egg - '"+badgeName+"' gevonden!",
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