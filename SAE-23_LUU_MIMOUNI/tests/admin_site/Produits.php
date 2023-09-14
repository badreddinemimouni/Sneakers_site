<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos produits - SneakersAddict</title>

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
                <a href="Panier.php">
                <img src="./IMAGES/PANIER.png" alt="panier" id="petit_panier">
                </a>
                <a href="../test.php" id="deco">Se déconnecter</a>
                <br><br>
            </div>
    </div>

    <p id="nos_produits">Nos produits</p>

    <div id="conteneur">
        <div id="chaussure1">
            <a href="Chaussure1.php">
                <picture> 
                    <img src="./IMAGES/NB550.webp" class="images" alt="chaussure1" style="margin-left:0.8%;margin-top:1%;">
                    <p class="description">New Balance 550</p>
                </picture>
            </a>
        </div>
        <div id="chaussure2">
            <a href="Chaussure2.php">
                <picture>
                <img src="./IMAGES/NKCELTICS.webp" class="images" alt="chaussure2" style="margin-left:0.8%;margin-top:1%;">
                <p class="description">Nike Dunk Low Celtics</p>    
                </picture>
            </a>
        </div>
        <div id="chaussure3">
            <a href="Chaussure3.php">   
                <picture>
                <img src="./IMAGES/NKAM90.webp" class="images" alt="chaussure3" style="margin-left:0.8%;margin-top:1%;">
                <p class="description">Nike Air Max 90</p>
            </a>
            </picture>
        </div>

    </div>
    <br>

    <div class="footer_produits">
        <p>SneakersAddict - Tous droits réservés.</p>
    </div>

</body>
</html>