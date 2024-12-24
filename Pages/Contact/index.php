<?php
    include "../../Includes/sessions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "../../Includes/header.php";
    ?>
    <link rel="stylesheet" href="../../Styles/form.css">
</head>
<body>
    <?php
        include "../../Includes/menu.php";
    ?>
    <div id="pageWrapper">
        <?php
            headerDisplay();
        ?>
        <div class="pageFormat">
            <div class="contentWrapper">
                <div class="content">
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