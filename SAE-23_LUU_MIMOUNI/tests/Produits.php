<?php 
$a=session_id(); if(empty($a)) session_start();
if($_SESSION['personne']==false){

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
            <?php
            if($_SESSION['personne']==false){
                echo "<a href='Produits.php'> Produits</a>";
            
                echo "<a href='Contact.php'> Contact</a>";
                echo "<a href='Panier.php'>";
            }
            ?>
            <?php if($_SESSION['admin']==true && $_SESSION['client']==false){ echo "<a href='stock.php'>Stock</a>";}?>

            <img src="./IMAGES/PANIER.png" alt="panier" id="petit_panier">
            </a>
            <?php if($_SESSION['admin']==true || $_SESSION['client']==true){
                echo "<a href='test.php' class='bouton bouton-right'>Se deconnecter</a>";
            }
            else{
                echo "<a href='test.php' class='bouton bouton-right'>Se connecter</a>";

            }
            ?>
                <br><br>
            </div>
    </div>

    <p id="nos_produits">Nos produits</p>

    <div id="conteneur">
        <div id="chaussure1">
             <a href="Chaussure1.php"  >
                <picture> 
                    <img src="./IMAGES/NB550.webp" class="images" alt="chaussure1" style="margin-left:0.8%;margin-top:1%;">
                    <p class="description">New Balance 550</p>
                </picture>
            </a>
        </div>
        <div id="chaussure2">
            
            <a href="Chaussure2.php" >
            
                <picture>
                <img src="./IMAGES/NKCELTICS.webp" class="images" alt="chaussure2" style="margin-left:0.8%;margin-top:1%;">
                <p class="description">Nike Dunk Low Celtics</p>    
                </picture>
            </a>
        </div>
        <div id="chaussure3">
            <a href="Chaussure3.php" >   
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
    
<?php }else{
    header("Location: test.php");
} ?> 
</body>
<script src="index2.js"></script>
</html>