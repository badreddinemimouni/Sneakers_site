<?php 
$a=session_id(); if(empty($a)) session_start();
if($_SESSION['personne']==false){

if($_SESSION['admin']==true && $_SESSION['client']==false){ 

try{
    $pdo= new PDO('mysql:host=localhost;port=3306;dbname=users;charset=utf8','root','root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style_main.css" rel="stylesheet">
    <link href="style3.css" rel="stylesheet">

    <link rel="shortcut icon" href="./IMAGES/SNEAKERSADDICT.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">    
    <title>SneakersAddict</title>
</head>
<body>
    <form method="POST">
    
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
        
            <div id="reste">
                <div id="id_qui">
                    <p class="Qui">Stock</p>

            </div>
        
        <div id="tout">    
        <div class="shoe">
            <img src="./IMAGES/NB550.webp" alt="Chaussure">
            <h2 name="c">New Balance 550 Gris / Blanc</h2>
            
            <div id="pointure_cadre2">
                <label for="pointure">Pointure :</label>
                
                <select name="pointure" id="pointure" >
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                </select>
            
                
                

            
            </div>
            <p>Stock : <input type="text" name="input" id="input" class="stockE"></input></p>
            <p id="prix_stock" >Prix : <input type="text" name="input4" id="input4" class="prixE2"></input></p>

            
            
            <div class="stock-buttons">
                <button type="button" id="increase" onclick="updateStock()">+</button>
                <button type="button" id="decrease" onclick="updateStock()">-</button>
                <button id="valid" name="valider1" class="validation">VALIDER</button> 
            
            </div>
        
        </div>   
        <?php
    
    if(isset($_POST['valider1']) && isset($_POST['input']) ){
        
        $stock= $_POST['input'];
        $prix=$_POST['input4'];
        $Pointure= $_POST['pointure'];
        $nom="New Balance 550";
        $sql2=("SELECT * FROM stock WHERE nom='$nom' AND pointure='$Pointure'");
        $account1= $pdo->prepare($sql2);
        $account1->execute();
        $acc1=$account1->fetchAll();
        $nbr_lignes=count($acc1);
        // echo $nbr_lignes;
        
        if($nbr_lignes==1){
            if(empty($prix)){
                $sql3=("UPDATE stock SET Stock=Stock+$stock WHERE nom='$nom' AND pointure='$Pointure' ");

                // echo $sql3;
                $account3= $pdo->prepare($sql3);
                $account3->execute();
                // echo $sql3;
            }
            if(!empty($prix)){
                
                $sql3=("UPDATE stock SET Stock=Stock+$stock, prix='$prix' WHERE nom='$nom' AND pointure='$Pointure'");
                // echo $sql3;
                $account3= $pdo->prepare($sql3);
                $account3->execute();
            }
<<<<<<< HEAD
        else{
            $sql=("INSERT INTO stock (nom,Stock,pointure,prix) VALUES('$nom ','$stock','$Pointure','$prix')");
            $account= $pdo->prepare($sql);
            $account->execute();
            echo $sql;
        }
=======
>>>>>>> 55e250920d9d65e280c645dacf662589a4c15b5f
        
        
    }
    else{
        $sql=("INSERT INTO stock (nom,Stock,pointure,prix) VALUES('$nom','$stock','$Pointure','$prix')");
        $account= $pdo->prepare($sql);
        $account->execute();
        echo $sql;
    }
}
?>

<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->



            <div class="shoe2">
                <img src="./IMAGES/NKAM90.webp" id="shoe2" alt="Chaussure">
                <h2>Air max 90 Noir / Bleu</h2>
                
                <div id="pointure_cadre2">
                    <label for="pointure">Pointure :</label>
                    
                    <select name="pointure2" id="pointure2" >
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                    </select>
                </div>

                <p>Stock : <input type="text" name="input2" id="input2" value="0" class="stockE"></input></p>
                <p id="prix_stock" >Prix : <input type="text" name="input3" id="input3" class="prixE2"></input></p>
                
                <div class="stock-buttons2">
                    <button type="button" id="increase2" onclick="updateStock2()">+</button>
                    <button type="button" id="decrease2" onclick="updateStock2()">-</button>
                    <button id="valid2" name="valider2" class="validation">VALIDER</button> 
                
                </div>
            </div> 
            <?php
    
    if(isset($_POST['valider2']) && isset($_POST['input2']) ){
        
        $stock= $_POST['input2'];
        $prix=$_POST['input3']; 
        $Pointure= $_POST['pointure2'];
        $nom="Air Max 90";
        $sql2=("SELECT * FROM stock WHERE nom='$nom' AND pointure='$Pointure'");
        $account1= $pdo->prepare($sql2);
        $account1->execute();
        $acc1=$account1->fetchAll();
        $nbr_lignes=count($acc1);
    
        if($nbr_lignes==1){
            if(empty($prix)){
                $sql3=("UPDATE stock SET Stock=Stock+$stock WHERE nom='$nom' AND pointure='$Pointure' ");

                // echo $sql3;
                $account3= $pdo->prepare($sql3);
                $account3->execute();
                // echo $sql3;
            }
            if(!empty($prix)){
                $prix=$_POST['input3'];
                $sql3=("UPDATE stock SET Stock=Stock+$stock, prix='$prix' WHERE nom='$nom' AND pointure='$Pointure'");
                // echo $sql3;
                $account3= $pdo->prepare($sql3);
                $account3->execute();
            }
                
            
        }
        else{
            $sql=("INSERT INTO stock (nom,Stock,pointure,prix) VALUES('$nom ','$stock','$Pointure','$prix')");
            $account= $pdo->prepare($sql);
            $account->execute();
            // echo $sql;
        }
        
    }
?>
<!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
            <div class="shoe3">
                <img src="./IMAGES/NKCELTICS.webp" id="shoe" alt="Chaussure">
                <h2>Nike Dunk Low Celtics</h2>
                
                <div id="pointure_cadre3">
                    <label for="pointure">Pointure :</label>
                    
                    <select name="pointure3" id="pointure" >
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                    </select>
                </div>

                <p>Stock : <input type="text" name="input6" id="input6" value="0" class="stockE"></input></p>
                <p id="prix_stock">Prix : <input type="text" name="input5" id="input5" class="prixE2"></input></p>

                <div class="stock-buttons3">
                    <button type="button" id="increase3" onclick="updateStock3()">+</button>
                    <button type="button" id="decrease3" onclick="updateStock3()">-</button>
                    <button id="valid3" name="valider3" class="validation">VALIDER</button> 
                
                </div>
            </div> 
        </div>    
        <?php
    
    if(isset($_POST['valider3']) && isset($_POST['input6']) ){
        
        $stock= $_POST['input6'];
        $prix=$_POST['input5']; 
        $Pointure= $_POST['pointure3'];
        $nom="Nike Dunk Low Celtics";
        $sql2=("SELECT * FROM stock WHERE nom='$nom' AND pointure='$Pointure'");
        $account1= $pdo->prepare($sql2);
        $account1->execute();
        $acc1=$account1->fetchAll();
        $nbr_lignes=count($acc1);
    
        if($nbr_lignes==1){
            if(empty($prix)){
                $sql3=("UPDATE stock SET Stock=Stock+$stock WHERE nom='$nom' AND pointure='$Pointure' ");

                // echo $sql3;
                $account3= $pdo->prepare($sql3);
                $account3->execute();
                // echo $sql3;
            }
            if(!empty($prix)){
                
                $sql3=("UPDATE stock SET Stock=Stock+$stock, prix='$prix' WHERE nom='$nom' AND pointure='$Pointure'");
                // echo $sql3;
                $account3= $pdo->prepare($sql3);
                $account3->execute();
            }
                
            
        }
        else{
            $sql=("INSERT INTO stock (nom,Stock,pointure,prix) VALUES('$nom ','$stock','$Pointure','$prix')");
            $account= $pdo->prepare($sql);
            $account->execute();
            echo $sql;
        }
        
    }
    ?>   
    </form>   
    
    
                
    
    <div class="footer_stock">
        <p>SneakersAddict - Tous droits réservés.</p>
    </div>

</body>
<script src="index.js"></script>
<?php }}else{
    header("Location: test.php");
} ?> 
</html>