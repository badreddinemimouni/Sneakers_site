<?php 
$a=session_id(); if(empty($a)) session_start(); //Obtient l'identifiant de session actuel et le stocke dans la variable $a et dmarre une nouvelle session si l'identifiant de session est vide (nouvelle session)

if($_SESSION['personne']==false){ // si la session de personne est fausse càd que quelqu'un est connecté
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200&display=swap" rel="stylesheet">

</head>
<body>
    
<?php 
}else{
    header("Location: test.php");
    } ?>
</body>
</html>

<?php

try{
    $pdo= new PDO('mysql:host=localhost;port=3306;dbname=users;charset=utf8','root','root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());

}



$Util1=$_POST['nom'];
$mail=$_POST['mail'];
$mdp=$_POST['passwords'];
$cmdp=$_POST['Cpassword'];
// $hashed_password = password_hash($mdp, PASSWORD_DEFAULT);
$prenom=$_POST['prenom'];

if (isset($Util1) && isset($mdp) && isset($mail) && isset($prenom) ){
        
        // $_SESSION['mdp']==true;
        // $_SESSION['conf']==true;
        $sql=("INSERT INTO user_site (prenom,nom,email,password) VALUES('$prenom','$Util1','$mail','$mdp')");
        $account= $pdo->prepare($sql);
        $account->execute();
        echo "Compte créé !!! Mr.".$Util1;
        
        

    
    




}else{
    echo "owwww ";
}


?>




