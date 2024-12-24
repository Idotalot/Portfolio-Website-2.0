// let navbarToggleValue = document.getElementById("navBarToggleValue").getAttribute("value");
let navbarToggleValue = document.getElementById("navBarToggleValue").value;

function toggleMenu() {
    buttonText = document.querySelectorAll(".menuButtonText");
    navBarToggle = document.getElementById("navBarToggle");
    
    let menuList = document.querySelector(".menuList")
    console.log(menuList);
    
    if (navbarToggleValue == 0) {
        menuList.classList.remove("hidden");
        navbarToggleValue = 1;
    } else if (navbarToggleValue == 1) {
        menuList.classList.add("hidden");
        navbarToggleValue = 0;
    }

    buttonText.forEach(text => {
        if (text.classList.contains("hidden")) {
            text.classList.remove("hidden")
            navBarToggle.classList.replace("fa-navicon", "fa-remove")
        } else {
            text.classList.add("hidden")
            navBarToggle.classList.replace("fa-remove", "fa-navicon")
        }
    });

    fetch('../../Includes/sessions.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ 
            name: "menuToggle", 
            value: navbarToggleValue 
        }),
    })
    .then((response) => {
        if (!response.ok) {
            throw new Error('Network response was not OK');
        }
        return response.text();
    })
    .catch((error) => {
        console.error('Error updating record:', error);
    });
}