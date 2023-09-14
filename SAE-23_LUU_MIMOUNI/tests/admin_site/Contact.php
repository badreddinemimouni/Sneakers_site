<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Air Max 90 - SneakersAddict</title>

    <link href="style_main.css" rel="stylesheet">

    <link rel="shortcut icon" href="./IMAGES/SNEAKERSADDICT.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

</head>
<body>
    
    <div id="bandeau">
        <a href="main.php"><img src="./IMAGES/LOGO-TEST.png" class="logo" alt="logo"></a>
        <a href="main.php"><h1>SneakersAddict</h1></a>
        <div id="petit_boutons">
            <a href="main.php">Accueil</a>
            <a href="Produits.php">Produits</a>
            <a href="Contact.php">Contact</a>
            <a href="stock.php">Stock</a>
            <img src="./IMAGES/PANIER.png" alt="panier" id="petit_panier">
            <a href="../test.php" id="deco">Se déconnecter</a>
        <br><br>
        </div>
    </div>

    <br>

    <div class="fcf-body">

        <div id="fcf-form">
            <h3 class="fcf-h3">Contactez-nous</h3>

            <form id="fcf-form-id" class="fcf-form-class" method="post" action="mailto:philippemtp34@gmail.com">
                
                <div class="fcf-form-group">
                    <label for="Name" class="fcf-label">Votre nom</label>
                    <div class="fcf-input-group">
                        <input type="text" id="Name" name="Name" class="fcf-form-control" required>
                    </div>
                </div>

                <div class="fcf-form-group">
                    <label for="Email" class="fcf-label">Votre email</label>
                    <div class="fcf-input-group">
                        <input type="email" id="Email" name="Email" class="fcf-form-control" required>
                    </div>
                </div>

                <div class="fcf-form-group">
                    <label for="Message" class="fcf-label">Votre message</label>
                    <div class="fcf-input-group">
                        <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                    </div>
                </div>

                <div class="fcf-form-group">
                    <a href="mailto:philippemtp34@gmail.com">
                        <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
                    </a>
                </div>

            </form>
        </div>

    </div>    

    <div class="footer_shoes1">
        <p>SneakersAddict - Tous droits réservés.</p>
    </div>
</body>
</html>