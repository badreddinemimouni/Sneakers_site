<?php
$a=session_id(); if(empty($a)) {session_start();}
$_SESSION['admin']=false;
$_SESSION['client']=false;
$_SESSION['personne']=true;
try {
    // Connexion à la base de données MySQL
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=users;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    // En cas d'erreur de connexion à la base de données, afficher l'erreur
    die('Erreur : ' . $e->getMessage());
}
?>
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

    <div id="reste_connexion">
        <section>
            
            <h1>Connexion</h1>
            <form action='info.php' method="POST">
                <label >Adresse email: </label>
                <input type="text" name="email">
                <label>Mot de passe: </label>
                <input type="password" name="mdp">
                <p>mot de passe ou email incorrect</p>
                <input type="submit" value="Connecter" name="su">

            </form>

            <form action="inscription1.php" method="POST">
                <input type="submit" value="Inscription"> 
            </form>

        </section>
    </div>


    
</body>
</html>