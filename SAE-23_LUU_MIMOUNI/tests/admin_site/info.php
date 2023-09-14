<!DOCTYPE html>

<?php

$Util=$_POST['email'];
$mdp=$_POST['mdp'];
//$sql='SELECT * FROM util WHERE Utilisateur= $Util AND mdp=$mdp';
try{
    $pdo= new PDO('mysql:host=localhost;port=3306;dbname=test;charset=utf8','root','');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
if (isset($Util) && isset($mdp)){
    $sql=("SELECT * FROM user_site WHERE email='$Util' AND password='$mdp'");
    $account= $pdo->prepare($sql);
    $account->execute();
    $acc=$account->fetchAll();

    $nbr_lignes=count($acc);
    if ($nbr_lignes==1){
        $sql1=("SELECT Grade FROM user_site WHERE email='$Util' AND password='$mdp'");
        $stmt=$pdo->query($sql1);
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if($row['Grade'] == 'admin'){
                $_SESSION['admin'] = true;
                header("Location: admin.php");
                
            }
            elseif($row['Grade'] == 'client'){
                $_SESSION['client'] = true;
                header("Location: cleint.php" );
                
            }

        } 

        

    }

    else{
        echo 'login ou mot de passe incorrect';
    }

}




//POur récup les valeurs Util et MDP : $Util=$_POST['email'] et $mdp=$_POST['mdp]
?>