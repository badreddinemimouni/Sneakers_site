<?php 
$a=session_id(); if(empty($a)) session_start(); // Démarre une session si elle n'est pas déjà démarrée

if($_SESSION['personne']==false){ // Vérifie si la variable de session 'personne' est fausse

$mysqli = new mysqli("localhost", "root", "root", "users"); // Établit une connexion à la base de données MySQL
$mysqli->set_charset("utf8"); // Définit le jeu de caractères de la connexion

$requete_fixe = "SELECT * FROM stock WHERE nom='Nike Dunk Low Celtics';"; // Requête SQL pour récupérer des données de la table 'stock' avec un critère de sélection
$resultat_fixe = $mysqli->query($requete_fixe); // Exécute la requête SQL et stocke le résultat dans une variable

while ($ligne = $resultat_fixe->fetch_assoc()) {
    $nom=$ligne['nom'] . ' '; // Récupère la valeur de la colonne 'nom' de la ligne actuelle du résultat et la stocke dans une variable
    $prix=$ligne["prix"]. ' '; // Récupère la valeur de la colonne 'Prix' de la ligne actuelle du résultat et la stocke dans une variable
    $id=$ligne['id']; // Récupère la valeur de la colonne 'id' de la ligne actuelle du résultat et la stocke dans une variable
    $pointure=$ligne['pointure']; // Récupère la valeur de la colonne 'pointure' de la ligne actuelle du résultat et la stocke dans une variable
}
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Dunk Low Celtics - SneakersAddict</title>

    <link href="style_main.css" rel="stylesheet"> <!-- Inclusion de la feuille de style "style_main.css" -->
    <link href="style3.css" rel="stylesheet"> <!-- Inclusion de la feuille de style "style3.css" -->

    <link rel="shortcut icon" href="./IMAGES/SNEAKERSADDICT.png" type="image/x-icon"> <!-- Lien vers l'icône de raccourci du site -->

    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Préconnexion à l'API Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Préconnexion aux polices Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet"> <!-- Inclusion de la police de caractères "Roboto Slab" -->

</head>
<body>
    
    <div id="bandeau">
        <a href="main.php"><img src="./IMAGES/LOGO-TEST.png" class="logo" alt="logo"></a> <!-- Logo du site avec un lien vers la page principale -->
        <a href="main.php"><h1>SneakersAddict</h1></a> <!-- Titre du site avec un lien vers la page principale -->
        <div id="petit_boutons">
        <a href="main.php">Accueil</a> <!-- Lien vers la page d'accueil -->
            <?php
            if($_SESSION['personne']==false){ // Vérification de la session de l'utilisateur
                echo "<a href='Produits.php'> Produits</a>"; // Lien vers la page des produits
                echo "<a href='Contact.php'> Contact</a>"; // Lien vers la page de contact
                echo "<a href='Panier.php'>"; // Lien vers le panier
            }
            ?>
            <?php if($_SESSION['admin']==true && $_SESSION['client']==false){ echo "<a href='stock.php'>Stock</a>";}?> <!-- Lien vers la page de gestion du stock si l'utilisateur est un administrateur -->

            <img src="./IMAGES/PANIER.png" alt="panier" id="petit_panier"> <!-- Icône du panier -->
            </a>
            <?php if($_SESSION['admin']==true || $_SESSION['client']==true){
                echo "<a href='test.php' class='bouton bouton-right'>Se deconnecter</a>"; // Lien de déconnexion si l'utilisateur est connecté
            }
            else{
                echo "<a href='test.php' class='bouton bouton-right'>Se connecter</a>"; // Lien de connexion si l'utilisateur n'est pas connecté

            }
            ?>
        <br><br>
        </div>
    </div>
    <form method="POST">
    <div id="Chaussure1">
        <img src="./IMAGES/NKCELTICS.webp" alt="NKCELTICS" style="width:50%;"> <!-- Image de la chaussure -->
        <p id="nom_shoes2">Nike Dunk Low Celtics</p> <!-- Nom de la chaussure -->

<div id="couleurs">
    <p>Couleur : </p>
    <div id="cadre_couleur2">
        <p id="couleur2">Blanc / Vert forêt </p> <!-- Couleur de la chaussure -->
    </div>
</div>

<p id="dispo">En stock :
<?php
    if(isset($_POST['verifs'])){ // Vérification si le formulaire a été soumis
        
        $pointures=$_POST['pointureC']; // Récupération de la pointure sélectionnée dans le formulaire
        
        $requete_fixe1 = "SELECT stock FROM stock WHERE nom='$nom' AND pointure='$pointures';"; // Requête pour obtenir le stock de la chaussure et de la pointure sélectionnée

        $resultat_fixe1 = $mysqli->query($requete_fixe1); // Exécution de la requête SQL

        $stock_fixe1 = $resultat_fixe1->fetch_assoc(); // Récupération du stock sous forme de tableau associatif
        
        if($stock_fixe1 == 0){ // Vérification si le stock est égal à zéro
            echo '<img src="./IMAGES/Rond_rouge.png" alt="Rond_rouge" style="width:7%; margin-top:3%;;"> '; // Affichage d'une image de rond rouge pour indiquer que le produit n'est pas disponible
            echo "Taille : " . $pointures; // Affichage de la taille sélectionnée
                        // $condition=false;
                        echo "<div id='Panier'>";
                        echo "\n";
                        // echo "<p> Plus Stock </p>";
        }
        else{
            echo '<img src="./IMAGES/Rond_vert.png" alt="Rond_vert" style="width:7%; margin-top:3%;;"> '; // Affichage d'une image de rond vert pour indiquer que le produit est disponible
            echo "Taille : " . $pointures; // Affichage de la taille sélectionnée
                        // $condition=true;
                        echo "<div id='Panier'>";
                        echo "\n";

                        echo "<button name='but3'>Payer";
                        echo "\n";
                        echo "</button>"; 
                        echo "\n";
                        
        }
        // if(isset($_POST['but3'])){
    
            $sql3=("UPDATE stock SET Stock=Stock-1 WHERE nom='$nom' AND pointure='$pointures' ");
            $acc = $mysqli->query($sql3);
                    // echo $sql3;
                        
        
        // }
        $row = mysqli_fetch_assoc($resultat_fixe1); // Récupération des données de la requête dans un tableau associatif
        
    }
?>
</p>

<p id="prix">Prix : <?php  echo $prix?>€</p> <!-- Affichage du prix de la chaussure -->

<div id="pointure_cadre">
    <label for="pointure">Pointure :</label>
    <select id="pointure" name="pointureC"> <!-- Sélection de la pointure dans un menu déroulant -->
        <option value="36">36</option>
        <option value="37">37</option>
        <option value="38">38</option>  
        <option value="39">39</option>
        <option value="40">40</option>
    </select>
    <input type="submit" value="Vérification" id="verif_pointure" name="verifs"> <!-- Bouton de vérification pour vérifier la disponibilité de la pointure sélectionnée -->

</div>



<?php
    



?> <!-- Bouton pour ajouter la chaussure au panier -->
</div>

</div> 
</form>

<div class="footer_shoes1">
    <p>SneakersAddict - Tous droits réservés.</p> <!-- Pied de page -->
</div>

<?php 
}else{
    header("Location: test.php"); // Redirection

    } ?> 
</body>
</html>