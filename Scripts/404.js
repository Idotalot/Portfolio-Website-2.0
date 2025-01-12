let serverName = window.location.hostname;
let imagesSourcePath = null;

if (serverName == "localhost") {
    imagesSourcePath = "/Portfolio-Website-2.0/Images/CatGifs/";
} else {
    imagesSourcePath = "" /* Website URL */ + "/";
}

let randomNumber = Math.floor(Math.random() * 6);
let image = null;
switch (randomNumber) {
    case 0:
        image = "catamazed";
        break;
    case 1:
        image = "catannoyed";
        break;
    case 2:
        image = "catboomer";
        break;
    case 3:
        image = "catmewing";
        break;
    case 4:
        image = "catstare";
        break;
    case 5:
        image = "catshocked";
        break;
    default:
        break;
}

let finalPath = imagesSourcePath + image;
let badgePath = imagesSourcePath + "larry.jpg";

let contentElement = document.getElementById("content");
let content = null;

finalPath = finalPath + ".gif";

if (randomNumber != 5) {    
    content = '<img src='+finalPath+' class="h-72 ml-auto mr-auto rounded-2xl shadow-md shadow-black">';
    content += '<h2 class="mt-3 text-xl font-bold">Guhhh??!?!?!!</h2>';
    content += '<p>Het lijkt erop dat deze pagina niet bestaat!</p>'
} else {
    content = '<div id="imageWrapper" class="bg-white mx-auto w-fit border-2 border-sky-700" style="border-radius: 50%" style="z-index: 3">'
    content += '<a href="https://www.instagram.com/reel/DClDqZ5ppQp/">'
    content += '<img src="'+finalPath+'" class="w-52 h-52 hover:w-64 hover:h-64" style="border-radius: 50%">'
    content += '</a>'
    content += '<input id="badgeName" value="Larry" hidden>'
    content += '</div>'
    content += '<p id="textInput"></p>'
}

contentElement.innerHTML = content