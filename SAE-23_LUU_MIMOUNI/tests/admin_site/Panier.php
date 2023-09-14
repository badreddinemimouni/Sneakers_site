<?php

    $mysqli = new mysqli("localhost", "root", "", "test");
    $mysqli->set_charset("utf8"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>

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

    <div id="Panier_liste">
        <section>
            <table>
                <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Pointure</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Action</th>

                </tr>

                <tr>
                    <td><img src="./IMAGES/NB550.webp" style="width:150px;"></td>
                    <td>New Balance 550</td>
                    <td>36</td>
                    <td>109.99€</td>
                    <td>3</td>
                    <td><img src="./IMAGES/CROIX.png" style="width:70px;"></td>
                </tr>

                <tr id="total">
                    <th>Total : 109.99€</th>
                </tr>

            </table>


        </section>

    </div>
</body>
</html>