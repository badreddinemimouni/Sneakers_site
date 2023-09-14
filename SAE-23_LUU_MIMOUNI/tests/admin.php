<?php 
$a=session_id(); 
if(empty($a)) session_start();
if($_SESSION['personne']==false){


if($_SESSION['admin']==true && $_SESSION['client']==false){ // Vérifie si 'admin' est égal  à true et 'client' à false 
//Donc que la personne connectée est l'admin seulement
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style_main.css" rel="stylesheet"> <!-- Lien vers le fichier CSS -->
    <link rel="shortcut icon" href="./IMAGES/SNEAKERSADDICT.png" type="image/x-icon"> <!-- Favicon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet"> <!-- Lien vers la police Google Fonts -->
    <title>SneakersAddict</title>
</head>
<body>
    <div id="bandeau">
        <a href="main.php"><img src="./IMAGES/LOGO-TEST.png" class="logo" alt="logo"></a> <!-- Logo -->
        <a href="main.php"><h1>SneakersAddict</h1></a> <!-- Titre du site -->
        <div id="petit_boutons">
            <a href="main.php">Accueil</a> <!-- Lien vers la page d'accueil -->
            <?php
            if($_SESSION['personne']==false){
                echo "<a href='Produits.php'> Produits</a>"; // Lien vers la page Produits
                echo "<a href='Contact.php'> Contact</a>"; // Lien vers la page Contact
                echo "<a href='Panier.php'>";
            }
            ?>
            <?php if($_SESSION['admin']==true && $_SESSION['client']==false){ echo "<a href='stock.php'>Stock</a>";}?> <!-- Lien vers la page Stock (uniquement pour les administrateurs) -->
            <img src="./IMAGES/PANIER.png" alt="panier" id="petit_panier">
            </a>
            <?php if($_SESSION['admin']==true || $_SESSION['client']==true){
                echo "<a href='test.php' class='bouton bouton-right'>Se deconnecter</a>"; // Lien pour se déconnecter
            }
            else{
                echo "<a href='test.php' class='bouton bouton-right'>Se connecter</a>"; // Lien pour se connecter
            }
            ?>
            <br><br>
        </div>
    </div>

    <div id="reste">
        <div id="id_qui">
            <p class="Qui">Bienvenue administrateur</p> <!-- Message de bienvenue pour l'administrateur -->
        </div>
        
        <div id="presentation">
            <img src="./IMAGES/SNEAKERSADDICT.png" alt="Qui sommes-nous ?" style="float:left; margin-right:10px; width:30%;"> <!-- Image -->
            <div class="desc_pres">
                <p>SneakersAddict est votre destination ultime pour trouver les sneakers les plus rares et exclusives sur le marché. Que vous soyez un collectionneur passionné ou un amateur de mode à la recherche d'une paire unique, nous sommes là pour satisfaire votre obsession des sneakers.</p>
                <!-- Description du site -->
            </div>
        </div>
    </div>

    <div class="footer">
        <p>SneakersAddict - Tous droits réservés.</p> // Pied de la page
    </div>
<?php }
}else{
    header("Location: test.php"); // Si la personne n'est pas connectée (ou n'est pas admin)
                                  // mais essaye d'accéder à cette page via l'URL alors elle est redirigée vers la page
                                  // de connexion 
    } ?> 
</body>
</html>