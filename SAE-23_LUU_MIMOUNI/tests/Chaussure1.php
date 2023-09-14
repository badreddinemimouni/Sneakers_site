<?php 
$a=session_id(); if(empty($a)) session_start();

// Vérification de la variable de session 'personne'
if($_SESSION['personne']==false){

    // Connexion à la base de données MySQL
    $mysqli = new mysqli("localhost", "root", "root", "users");
    $mysqli->set_charset("utf8");

$requete_fixe = "SELECT * FROM stock WHERE nom='New Balance 550';";
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
    <title>New Balance 550</title>

    <link href="style_main.css" rel="stylesheet"> <!-- Inclusion de la feuille de style "style_main.css" -->
    <link href="style3.css" rel="stylesheet"> <!-- Inclusion de la feuille de style "style3.css" -->

    <link rel="shortcut icon" href="./IMAGES/SNEAKERSADDICT.png" type="image/x-icon"> <!-- Icône du site -->

    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Préconnexion à Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet"> <!-- Inclusion de la police de caractères Roboto Slab -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Inclusion de la bibliothèque jQuery -->

</head>
<body>

    <div id="bandeau">
        <a href="main.php"><img src="./IMAGES/LOGO-TEST.png" class="logo" alt="logo"></a> <!-- Logo du site avec un lien vers la page "main.php" -->
        <a href="main.php"><h1>SneakersAddict</h1></a> <!-- Titre du site avec un lien vers la page "main.php" -->
        <div id="petit_boutons">
            <a href="main.php">Accueil</a> <!-- Lien vers la page "main.php" -->
            <?php
            if($_SESSION['personne']==false){ // Vérification de la variable de session "personne"
                echo "<a href='Produits.php'> Produits</a>"; // Lien vers la page "Produits.php"
            
                echo "<a href='Contact.php'> Contact</a>"; // Lien vers la page "Contact.php"
                echo "<a href='Panier.php'>"; // Lien vers la page "Panier.php"
            }
            ?>
            <?php if($_SESSION['admin']==true && $_SESSION['client']==false){ echo "<a href='stock.php'>Stock</a>";}?> <!-- Vérification des variables de session "admin" et "client" pour afficher le lien vers la page "stock.php" -->

            <img src="./IMAGES/PANIER.png" alt="panier" id="petit_panier"> <!-- Image du panier -->
            </a>
            <?php if($_SESSION['admin']==true || $_SESSION['client']==true){ // Vérification des variables de session "admin" et "client" pour afficher le lien de déconnexion ou de connexion
                echo "<a href='test.php' class='bouton bouton-right'>Se deconnecter</a>"; // Lien vers la page "test.php" avec la classe CSS "bouton" et "bouton-right"
            }
            else{
                echo "<a href='test.php' class='bouton bouton-right'>Se connecter</a>"; // Lien vers la page "test.php" avec la classe CSS "bouton" et "bouton-right"
            }
            ?>
                <br><br>

            </div>
    </div>

    <form method="POST"> <!-- Formulaire avec la méthode POST -->
    <div id="Chaussure1">
        <img src="./IMAGES/NB550.webp" alt="NB_550" style="width:50%;"> <!-- Image de la chaussure avec l'attribut alt pour la description alternative -->

        <p id="nom_shoes"><?php echo $nom;?></p> <!-- Affichage du nom de la chaussure -->

        <div id="couleurs">
            <p>Couleur : </p>
            <div id="cadre_couleur1">
                <p id="couleur1">Blanc / Gris </p> <!-- Affichage de la couleur de la chaussure -->
            </div>
        </div>

        <p id="dispo">En stock : 
        <?php
        if(isset($_POST['verifs'])){ // Vérification de l'existence de la variable POST 'verifs'

            $pointures=$_POST['pointureC']; // Récupération de la valeur de la pointure sélectionnée
            $requete_fixe1 = "SELECT stock FROM stock WHERE nom='New Balance 550' AND pointure='$pointures';"; // Requête pour obtenir le stock disponible pour la pointure sélectionnée
            $resultat_fixe1 = $mysqli->query($requete_fixe1); // Exécution de la requête
            

                    $pointures=$_POST['pointureC'];
                    $requete_fixe1 = "SELECT stock FROM stock WHERE nom='New Balance 550' AND pointure='$pointures';";
                    $resultat_fixe1 = $mysqli->query($requete_fixe1);
                    
                    $stock_fixe1 = $resultat_fixe1->fetch_assoc();

                    if($stock_fixe1 == 0){
                        echo '<img src="./IMAGES/Rond_rouge.png" alt="Rond_rouge" style="width:7%; margin-top:3%;;"> ';
                        echo "Taille : " . $pointures; 
                        // $condition=false;
                        echo "<div id='Panier'>";
                        echo "\n";
                        // echo "<p> Plus Stock </p>";
                    }
                    else{
                    
                        echo '<img src="./IMAGES/Rond_vert.png" alt="Rond_vert" style="width:7%; margin-top:3%;;"> ';
                        echo "Taille : " . $pointures;
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
                    $row = mysqli_fetch_assoc($resultat_fixe1);
                    
                }

            ?>
        </p>
        <?php
        
// while ($ligne = $resultat_fixe->fetch_assoc()) {
//     $nom=$ligne['nom'] . ' ';
//     $prix=$ligne["prix"]. ' ';
//     $id=$ligne['id'];
//     $pointure=$ligne['pointure'];
    
// }
?>
<?php 
                // if(isset($_POST['pointureC'])){
                //     $pointures=$_POST['pointureC'];}?>  
<?php 
//         if(isset($pointures)){

       
// $requete_fixe25 = "SELECT * FROM stock WHERE nom='New Balance 550' AND pointures='$pointures' ";
// // echo $requete_fixe25;
// $resultat_fixe25 = $mysqli->query($requete_fixe);
// $prix_fixe1 = $resultat_fixe25->fetch_assoc();


//         }
?>
        <p id="prix">Prix : <?php echo $prix; ?>€</p> <!-- Affichage du prix de la chaussure -->

        <div id="pointure_cadre">
            <label for="pointure">Pointure : </label> <!-- Étiquette pour la sélection de la pointure -->
            <select id="pointure" name="pointureC"> <!-- Liste déroulante des pointures -->
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
            </select>


                
            <input type="submit" value="Vérification" id="verif_pointure" name="verifs"> <!-- Bouton de vérification de la pointure -->
            

<<<<<<< HEAD
=======
                
        </div>
        
>>>>>>> 55e250920d9d65e280c645dacf662589a4c15b5f
            </a>
        </div>
    <p><span id="pointure_user"></span> </p>
    </div> 
    

<div class="footer_shoes1">
    <p>SneakersAddict - Tous droits réservés.</p> <!-- Pied de page indiquant le nom du site et les droits réservés -->
</div>


</form>

<?php }else{
    header("Location: test.php"); // Redirige l'utilisateur vers la page "test.php"
} ?>   

</body>
</html>
