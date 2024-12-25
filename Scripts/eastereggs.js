let frontImages = [
    "wordpresslogo.png",
    ""
]

let backImages = [
    "sickmode.png",
    ""
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