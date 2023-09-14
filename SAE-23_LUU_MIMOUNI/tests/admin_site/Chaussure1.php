<?php 
$mysqli = new mysqli("localhost", "root", "", "test");
$mysqli->set_charset("utf8");
$requete_fixe = "SELECT * FROM stock WHERE nom='New Balance 550';";
$resultat_fixe = $mysqli->query($requete_fixe);
while ($ligne = $resultat_fixe->fetch_assoc()) {
$nom=$ligne['nom'] . ' ';
$prix=$ligne["Prix"]. ' ';
$id=$ligne['id'];
$pointure=$ligne['pointure'];
}

session_start()


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Balance 550</title>

    <link href="style_main.css" rel="stylesheet">

    <link rel="shortcut icon" href="./IMAGES/SNEAKERSADDICT.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- <script>
        $(document).ready(function() {
            $('#pointure').change(function() {
                var pointure_select = $(this).val();

                // Utilisez la valeur de pointure_select dans votre requête SQL
                var req_pointure = "SELECT Stock FROM Stock WHERE nom='New Balance 550' AND pointure=" + pointure_select;
                console.log(req_pointure);

                $.ajax({
                    type: 'POST',
                    url: '  Chaussure1.php',
                    data: { req_pointure: req_pointure },
                    success: function(response) {
                        // Faites quelque chose avec la réponse du script PHP
                        $('#pointure_user').innerHtml(pointure_select);
                    }
                });
            });
        });
    </script> -->


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
                <a href="Panier.php"><span><?php  ?></span>
                <img src="./IMAGES/PANIER.png" alt="panier" id="petit_panier">
                </a>
                <a href="../test.php" id="deco">Se déconnecter</a>
                <br><br>
            </div>
    </div>


    <div id="Chaussure1">
        <img src="./IMAGES/NB550.webp" alt="NB_550" style="width:50%;">

        <p id="nom_shoes"><?php echo $nom;?></p>


        <div id="couleurs">
            <p>Couleur : </p>
            <div id="cadre_couleur1">
                <p id="couleur1">Blanc / Gris </p>
            </div>
        </div>

        <p id="dispo">En stock :</p>


        <p id="prix">Prix : <?php echo $prix ?>€</p>
        
        <div id="pointure_cadre">
            <form method="post">
                <label for="pointure">Pointure :</label>
                <select id="pointure" name="pointure_choisie">
                    <option value=" "></option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                </select>
            </form>
        </div>
       
        <div id="Panier">
            <a href="ajouter_panier.php">
            <button onclick="">Ajouter au panier</button>
            </a>
        </div>
    <br>

    <p>La pointure choisie est : <span id="pointure_user"></span></p>
    </div> 


    <div class="footer_shoes1">
        <p>SneakersAddict - Tous droits réservés.</p>
    </div>
    <?php
        if (isset($_POST['req_pointure'])) {
            echo "Pointure". $_POST['req_pointure'];
            header("Location: Panier.php");
        }
        
    ?>
</body>
</html>