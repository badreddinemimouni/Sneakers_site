<?php 
$a=session_id(); // Récupération de l'ID de session
if(empty($a)) session_start(); // Démarrage de la session si l'ID de session est vide

if($_SESSION['personne']==false){ // Vérification si la personne est identifiée ou non

$mysqli = new mysqli("localhost", "root", "root", "users"); // Connexion à la base de données MySQL
$mysqli->set_charset("utf8"); // Définition du jeu de caractères utilisé pour la communication avec la base de données

$requete_fixe = "SELECT * FROM stock WHERE nom='Air Max 90';";
$resultat_fixe = $mysqli->query($requete_fixe);
while ($ligne = $resultat_fixe->fetch_assoc()) {
    $nom=$ligne['nom'] . ' ';
    $prix=$ligne["prix"]. ' ';
    $id=$ligne['id'];
    $pointure=$ligne['pointure'];
    
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Dunk Low Celtics - SneakersAddict</title>

    <link href="style_main.css" rel="stylesheet"> <!-- Inclusion d'une feuille de style CSS -->
    <link href="style3.css" rel="stylesheet"> <!-- Inclusion d'une autre feuille de style CSS -->

    <link rel="shortcut icon" href="./IMAGES/SNEAKERSADDICT.png" type="image/x-icon"> <!-- Définition de l'icône de raccourci -->

    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Préconnexion à une source de polices Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet"> <!-- Inclusion d'une police Google -->

</head>
<body>
    
    <div id="bandeau">
        <a href="main.php"><img src="./IMAGES/LOGO-TEST.png" class="logo" alt="logo"></a> <!-- Logo avec un lien vers la page principale -->
        <a href="main.php"><h1>SneakersAddict</h1></a> <!-- Titre avec un lien vers la page principale -->
        <div id="petit_boutons">
        <a href="main.php">Accueil</a> <!-- Lien vers la page d'accueil -->
            <?php
            if($_SESSION['personne']==false){ // Vérification si la personne est identifiée ou non
                echo "<a href='Produits.php'> Produits</a>"; // Lien vers la page des produits
            
                echo "<a href='Contact.php'> Contact</a>"; // Lien vers la page de contact
                echo "<a href='Panier.php'>"; // Lien vers le panier
            }
            ?>
            <?php if($_SESSION['admin']==true && $_SESSION['client']==false){ echo "<a href='stock.php'>Stock</a>";}?> <!-- Lien vers la page de stock si l'utilisateur est un administrateur -->

            <img src="./IMAGES/PANIER.png" alt="panier" id="petit_panier"> <!-- Image du panier -->
            </a>
            <?php if($_SESSION['admin']==true || $_SESSION['client']==true){
                echo "<a href='test.php' class='bouton bouton-right'>Se deconnecter</a>"; // Lien pour se déconnecter si l'utilisateur est identifié
            }
            else{
                echo "<a href='test.php' class='bouton bouton-right'>Se connecter</a>"; // Lien pour se connecter si l'utilisateur n'est pas identifié

            }
            ?>
        <br><br>
        </div>
    </div>
    <form method="POST">
    <div id="Chaussure1">
        <img src="./IMAGES/NKAM90.webp" alt="NKCELTICS" style="width:50%;"> <!-- Image de la chaussure -->
        <p id="nom_shoes2">Nike Air Max 90</p> <!-- Nom de la chaussure -->

        <div id="couleurs">
        <p>Couleur : </p> <!-- Étiquette pour afficher la couleur de la chaussure -->
            <div id="cadre_couleur2">
                <p id="couleur2">Blanc / Vert forêt </p> <!-- Affichage de la couleur de la chaussure -->
            </div>
        </div>

        <p id="dispo">En stock :
        <?php
                if(isset($_POST['verifs'])){ // Vérification si le formulaire a été soumis
                    $pointures=$_POST['pointureC']; // Récupération de la pointure sélectionnée dans le formulaire
                    $requete_fixe1 = "SELECT stock FROM stock WHERE nom='$nom' AND pointure='$pointures';"; // Requête pour récupérer le stock disponible pour la pointure sélectionnée
                    $resultat_fixe1 = $mysqli->query($requete_fixe1); // Exécution de la requête
                    
                    $stock_fixe1 = $resultat_fixe1->fetch_assoc(); // Récupération du stock disponible
                    
                    if($stock_fixe1 == 0){ // Vérification si le stock est épuisé
                        echo '<img src="./IMAGES/Rond_rouge.png" alt="Rond_rouge" style="width:7%; margin-top:3%;;"> '; // Affichage d'une image de rond rouge
                        echo "Taille : " . $pointures; // Affichage de la taille sélectionnée
                        // $condition=false;
                        echo "<div id='Panier'>";
                        echo "\n";
                        // echo "<p> Plus Stock </p>";
                    }
                    else{
                        echo '<img src="./IMAGES/Rond_vert.png" alt="Rond_vert" style="width:7%; margin-top:3%;;"> '; // Affichage d'une image de rond vert
                        echo "Taille : " . $pointures; // Affichage de la taille sélectionnée
                        // $condition=true;
                        echo "<div id='Panier'>";
                        echo "\n";

                        echo "<button name='but3'>Payer";
                        echo "\n";
                        echo "</button>"; 
                        echo "\n";

                    }
                    $sql3=("UPDATE stock SET Stock=Stock-1 WHERE nom='$nom' AND pointure='$pointures' ");
            $acc = $mysqli->query($sql3);
                    $row = mysqli_fetch_assoc($resultat_fixe1); // Récupération de la ligne de résultat
                }
                
            ?>
            </p>
        <p id="prix">Prix : <?php echo $prix?>€</p> <!-- Affichage du prix de la chaussure -->

        <div id="pointure_cadre">
            <label for="pointure">Pointure :</label> <!-- Étiquette pour le champ de sélection de la pointure -->
            <select id="pointure" name="pointureC"> <!-- Champ de sélection de la pointure -->
                <option value="36">36</option> <!-- Option de pointure -->
                <option value="37">37</option> <!-- Option de pointure -->
                <option value="38">38</option> <!-- Option de pointure -->
                <option value="39">39</option> <!-- Option de pointure -->
                <option value="40">40</option> <!-- Option de pointure -->
            </select>
            <input type="submit" value="Vérification" id="verif_pointure" name="verifs"> <!-- Bouton pour soumettre le formulaire -->

        </div>

    </div>

    </div> 
    </form>
    <div class="footer_shoes1">
        <p>SneakersAddict - Tous droits réservés.</p> <!-- Mention de droits d'auteur -->
    </div>

<?php 
}else{
    header("Location: test.php"); // Redirection vers la page de connexion
}
?>
</body>
</html>
