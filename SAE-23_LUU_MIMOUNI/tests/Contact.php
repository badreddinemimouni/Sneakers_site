<?php 
$a=session_id(); if(empty($a)) session_start(); // Gestion de la session, récupération ou démarrage de la session
if($_SESSION['personne']==false){ // Vérification si la personne n'est pas identifiée
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Air Max 90 - SneakersAddict</title>

    <link href="style_main.css" rel="stylesheet"> <!-- Importe la feuille de style "style_main.css" -->

    <link rel="shortcut icon" href="./IMAGES/SNEAKERSADDICT.png" type="image/x-icon"> <!-- Définit l'icône du site -->

    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Préconnecte au domaine de Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Préconnecte au domaine de Google Fonts en spécifiant l'attribut "crossorigin" -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet"> <!-- Importe la police de caractères "Roboto Slab" depuis Google Fonts -->

</head>
<body>
    
    <div id="bandeau">
        <a href="main.php"><img src="./IMAGES/LOGO-TEST.png" class="logo" alt="logo"></a> <!-- Affiche un logo avec un lien vers "main.php" -->
        <a href="main.php"><h1>SneakersAddict</h1></a> <!-- Affiche un titre avec un lien vers "main.php" -->
        <div id="petit_boutons">
        <a href="main.php">Accueil</a> <!-- Affiche un lien vers "main.php" -->

        <?php
            if($_SESSION['personne']==false){
                echo "<a href='Produits.php'> Produits</a>"; // Affiche un lien vers "Produits.php" si la condition est remplie
            
                echo "<a href='Contact.php'> Contact</a>"; // Affiche un lien vers "Contact.php" si la condition est remplie
                echo "<a href='Panier.php'>"; // Affiche un lien vers "Panier.php" si la condition est remplie
            }
        ?>

        <?php if($_SESSION['admin']==true && $_SESSION['client']==false){ echo "<a href='stock.php'>Stock</a>";}?> <!-- Affiche un lien vers "stock.php" si la condition est remplie -->

        <img src="./IMAGES/PANIER.png" alt="panier" id="petit_panier"> <!-- Affiche une image de panier -->
        </a>

        <?php if($_SESSION['admin']==true || $_SESSION['client']==true){
            echo "<a href='test.php' class='bouton bouton-right'>Se deconnecter</a>"; // Affiche un lien de déconnexion si la condition est remplie
        }
        else{
            echo "<a href='test.php' class='bouton bouton-right'>Se connecter</a>"; // Affiche un lien de connexion si la condition n'est pas remplie
        }
        ?>

        <br><br>
        </div>
    </div>

    <br>

    <div class="fcf-body">

        <div id="fcf-form">
            <h3 class="fcf-h3">Contactez-nous</h3> <!-- Affiche un titre de formulaire -->

            <form id="fcf-form-id" class="fcf-form-class" method="post" action="mailto:philippemtp34@gmail.com"> <!-- Formulaire de contact qui sera envoyé à l'adresse email spécifiée -->
                
    <div class="fcf-form-group">
        <label for="Name" class="fcf-label">Votre nom</label> <!-- Champ pour entrer le nom -->
        <div class="fcf-input-group">
            <input type="text" id="Name" name="Name" class="fcf-form-control" required> <!-- Champ de saisie du nom -->
        </div>
    </div>

    <div class="fcf-form-group">
        <label for="Email" class="fcf-label">Votre email</label> <!-- Champ pour entrer l'adresse email -->
        <div class="fcf-input-group">
            <input type="email" id="Email" name="Email" class="fcf-form-control" required> <!-- Champ de saisie de l'adresse email -->
        </div>
    </div>

    <div class="fcf-form-group">
        <label for="Message" class="fcf-label">Votre message</label> <!-- Champ pour entrer le message -->
        <div class="fcf-input-group">
            <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea> <!-- Champ de saisie du message -->
        </div>
    </div>

    <div class="fcf-form-group">
        <a href="mailto:philippemtp34@gmail.com"> <!-- Lien pour envoyer le message par email -->
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button> <!-- Bouton d'envoi du message -->
        </a>
    </div>

</form>
</div>

</div>    

<div class="footer_shoes1">
    <p>SneakersAddict - Tous droits réservés.</p> <!-- Pied de page avec le copyright -->
</div>

<?php 
}else{
    header("Location: test.php"); // Redirection vers la page de connexion si l'utilisateur n'est pas authentifié
    } ?>
</body>
</html>
