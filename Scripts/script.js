menuVisible = false

function toggleMenu() {
    buttonText = document.querySelectorAll(".menuButtonText");
    navBarToggle = document.getElementById("navBarToggle");
    
    let menuList = document.querySelector(".menuList")
    console.log(menuList);
    
    if (menuList.classList.contains("hidden")) {
        menuList.classList.remove("hidden")
    } else {
        menuList.classList.add("hidden")
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
}