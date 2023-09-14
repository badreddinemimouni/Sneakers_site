<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_test.css">
    <link rel="stylesheet" href="style_main.css">

    <link rel="shortcut icon" href="./IMAGES/SNEAKERSADDICT.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet"> 

    <title>Se connecter - SneakersAddict</title>
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

    <div id="reste_connexion">
        <section>
            
            <h1>Connexion</h1>
            <form action='info.php' method="POST">
                <label >Adresse email: </label>
                <input type="text" name="email">
                <label>Mot de passe: </label>
                <input type="password" name="mdp">
                <input type="submit" value="Connecter">
            </form>
            <form action="inscription1.php" method="POST">
                <input type="submit" value="Inscription"> 
            </form>
        </section>
    </div>
    
</body>
</html>