function toggleMenu() {
    buttonText = document.querySelectorAll(".menuButtonText");
    navBarToggle = document.getElementById("navBarToggle");

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