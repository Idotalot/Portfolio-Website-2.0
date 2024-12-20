<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i.Dot - Ervaringen </title>
    <link rel="stylesheet" href="../../Styles/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../Styles/tailwind.css">
    <link rel="stylesheet" href="../../Styles/form.css">
    <script src="../../Scripts/script.js" defer></script>
</head>
<body>
    <?php
        include "../../Includes/menu.php";
    ?>
    <div id="pageWrapper">
        <?php
            include "../../Includes/header.php";
        ?>
        <div class="pageFormat">
            <div class="contentWrapper">
                <!-- <h1><cite>"Hello World!"</cite></h1> -->
                <div class="content">
                    <!-- <h3>
                        Over mij
                    </h3>
                    <p style="margin-bottom: 20px;">
                        Ik ben erg gedreven en sta altijd klaar voor nieuwe uitdagingen. momenteel ben ik aan het afstuderen voor de opleiding <strong>MBO 4 Software Development</strong> en zal ik in het vervolg HBO Informatica gaan studeren.
                    </p> -->
                    <p style="margin-top: 20px; margin-bottom: 20px;">
                        Heeft u vragen of wilt u meer informatie? Neem dan contact op. Dit kan per mail via het onderstaande formulier.
                    </p>
                    <div class="formContainer">
                        <form action="https://formspree.io/f/mwkgzywk" method="POST">
                            <div class="formItem">
                                <label>Uw emailadres:</label>
                                <input type="email" name="email" required>
                            </div>
                            
                            <div class="formItem">
                                <label>Uw bericht:</label>
                                <textarea name="message" required></textarea>
                            </div>
                            
                            <!-- your other form fields go here -->
                            <button type="submit" class="formButton"><strong>Verzenden</strong></button>
                            </form>
                    </div> 
                </div>
            </div>
            <?php
                include "../../Includes/footer.php";
            ?>
        </div>            
    </div>
    </div>
</body>
</html>