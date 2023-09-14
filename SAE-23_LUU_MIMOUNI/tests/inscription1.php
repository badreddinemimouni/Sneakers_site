<?php 
$a=session_id(); if(empty($a)) session_start();

?>

<!DOCTYPE html>

<?php
$a=session_id(); if(empty($a)) session_start();

try{
    $pdo= new PDO('mysql:host=localhost;port=3306;dbname=users;charset=utf8','root','root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());

}

// $mdp2=$_SESSION['conf']==true;



?>
 

<link rel="shortcut icon" href="./IMAGES/SNEAKERSADDICT.png" type="image/x-icon">
<title>S'inscrire - SneakersAddict</title>
<link rel="stylesheet" href="style_ins.css">
<link rel="stylesheet" href="style_main.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

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
    <!-- <script>
    function validateForm() {
      var password = document.getElementById('password').value;
      var confirmPassword = document.getElementById('confirm_password').value;
      var errorElement = document.getElementById('error');

      if (password !== confirmPassword) {
        errorElement.textContent = "Les mots de passe ne correspondent pas.";
        return false; // Empêche la soumission du formulaire
      }

      return true; // Autorise la soumission du formulaire
    }
  </script> -->
  
<form class="form" method="POST" >
    <p class="title">S'enregistrer </p>
    <p class="message">Inscrivez-vous à SneakersAddict </p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" name="nom">
            <span>Prénom</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input" name="prenom">
            <span>Nom de famille</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="email" class="input" name="mail">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input" name="passwords" id="password">
        <span>Mot de passe</span>

    </label>
    <label>
        <input required="" placeholder="" type="password" class="input" name="Cpassword" id="confirm_password" >
        <span>Confirmer le mot de passe</span>
    <br>
    <span id="error" class="error-message"></span>
    <?php 
       

    
    if(isset($_POST['Cpassword']) && isset($_POST['passwords'])){
        $mdp=$_POST['passwords'];
        $cmdp=$_POST['Cpassword'];
        if($mdp==$cmdp){
            // echo "deso";
            $_SESSION['conf']=true;

        }else{
            echo "mot de passe incorrect";
            $_SESSION['conf']=false;
            
        }
    }
    ?>
    </br>
    </label>
    
    <input type="submit" value="S'enregistrer" class="submit"   >
    
    <p class="signin">Déjà inscrit ?<a href="test.php"> Se connecter</a> </p>
   
</form>
<?php




  if (isset($_POST['nom']) && isset($mdp) && isset($_POST['mail']) && isset($_POST['prenom'])){
    $Util1=$_POST['nom'];
    $mail=$_POST['mail'];
    // echo "sala";
    // $hashed_password = password_hash($mdp, PASSWORD_DEFAULT);
    $prenom=$_POST['prenom'];
    if($_SESSION['conf']==true){
        
        
        $sql=("INSERT INTO user_site (prenom,nom,email,password) VALUES('$prenom','$Util1','$mail','$mdp')");
        $account= $pdo->prepare($sql);
        $account->execute();
        // echo "Compte créé !!! Mr.".$Util1;

        header("Location: test.php");
    }
    
}
    
?>
<!-- <script src="index2.js"></script> -->
<div class="footer_ins">
    <p>SneakersAddict - Tous droits réservés.</p>
</div>

 
