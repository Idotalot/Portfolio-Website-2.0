<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i.Dot - Start</title>
    <link rel="stylesheet" href="Styles/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Styles/tailwind.css">
    <script src="Scripts/script.js" defer></script>
</head>
<body>
    <div id="menuWrapper">
        <div class="menuDiv">
            <button class="menuButton" style="width: 3rem;" onclick="toggleMenu()">
                <i id="navBarToggle" class="menuItem fa fa-navicon"></i>
                <input id="navBarToggleValue" type="hidden" value="0">
            </button>
        </div>
        <div class="menuDiv menuList hidden">
            <a class="menuButton" href="">
                <div style="display: flex; padding: 12px;">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <p class="menuButtonText hidden">Startpagina</p>
                </div>
            </a>
            <a class="menuButton" href='Pages/Ervaringen/'>
                <div style="display: flex; padding: 12px;">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                    <p class="menuButtonText hidden">Ervaringen</p>
                </div>
            </a>
            <a class="menuButton" href='Pages/Contact/'>
                <div style="display: flex; padding: 12px;">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <p class="menuButtonText hidden">Contact</p>
                </div>
            </a>       
        </div>
    </div>
    <div id="pageWrapper" class="flex-grow">
        <h1>Portfolio &rarr; Start</h1>
        <div class="pageFormat">
            <div class="contentWrapper">
                <h1><cite>"Hello World!"</cite></h1>
                <div class="content">
                    <h3 class="font-bold">
                        Over mij
                    </h3>
                    <p class="mb-2.5">
                        <?php
                            include "../Portfolio-Website-2.0/Includes/dbConnect.php";
                            include "../Portfolio-Website-2.0/Includes/dbFunctions.php";
                            echo readAboutMe($conn);
                        ?>
                        <!-- Ik ben erg gedreven en sta altijd klaar voor nieuwe uitdagingen. momenteel ben ik aan het afstuderen voor de opleiding <strong>MBO 4 Software Development</strong> en zal ik in het vervolg HBO Informatica gaan studeren. -->
                    </p>
                    <p class="mb-5">Daarnaast heb ik al jaren een zeer grote passie voor fitness en ben ik ook werkzaam in een sportschool.</p>
                    <h3>
                        Diplomas / Certificaten
                    </h3>
                    <p>
                        Een lijst met mijn behaalde diplomas & certificaten
                    </p></p>
                    <table class="mt-5">
                        <thead>
                            <tr>
                                <th>Diploma</th>
                                <th>Omschrijving</th>
                                <th>Vanaf - Tot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="evenTableItem">
                                <td>MBO 4</td>
                                <td>Software Development (Versneld Traject)</td>
                                <td>2021 - 2024 / Binnenkort</td>
                            </tr>
                            <tr>
                                <td>VMBO-T</td>
                                <td>Profiel: Techniek</td>
                                <td>2018 - 2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div class="grid min-h-screen" style="grid-template-rows: 1fr auto"> -->
            <div class="w-full">
                <div class="absolute bottom-0 m-5 left-1/2">
                    <div class="flex flex-row gap-2">
                        <!-- <i class="fa-brands fa-instagram"></i> -->
                        <a href="https://www.linkedin.com/in/jordy-perret-645584241/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                        <a href="https://www.instagram.com/jordyperret/?hl=nl"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z"/></svg></a>
                        <a href="https://github.com/idotalot"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12 0 5.303 3.438 9.794 8.207 11.397.6.111.82-.26.82-.577v-2.073c-3.338.727-4.04-1.465-4.04-1.465-.546-1.387-1.334-1.76-1.334-1.76-1.09-.746.084-.73.084-.73 1.205.084 1.836 1.237 1.836 1.237 1.07 1.833 2.806 1.303 3.494.996.108-.776.419-1.303.76-1.603-2.667-.303-5.467-1.335-5.467-5.922 0-1.307.467-2.383 1.237-3.221-.124-.303-.535-1.525.118-3.176 0 0 1.006-.322 3.298 1.232.959-.266 1.99-.399 3.006-.399 1.016 0 2.047.133 3.006.399 2.292-1.554 3.298-1.232 3.298-1.232.653 1.651.242 2.873.118 3.176.77.838 1.237 1.914 1.237 3.221 0 4.604-2.802 5.618-5.469 5.921.431.369.817 1.1.817 2.219v3.293c0 .319.218.69.822.577 4.77-1.604 8.207-6.094 8.207-11.397 0-6.627-5.373-12-12-12z"/></svg></a>
                    </div>
                </div>
            </div>
        </div>            
    </div>
</body>
</html>