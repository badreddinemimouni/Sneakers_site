<?php 

try{
    $pdo= new PDO('mysql:host=localhost;port=3306;dbname=users;charset=utf8','root','root'); // Connexion à la base de données MySQL
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage()); // Affichage d'une erreur en cas d'échec de la connexion
}

if(!isset($_SESSION)) {
    session_start(); // Démarrage de la session
}

if(!isset($_SESSION['panier'])) {
    $_SESSION['panier']= array(); // Initialisation du panier dans la session s'il n'existe pas encore
}

if (isset($_GET["id"])){
    $id =$_GET['id'];
    $produit = $mysqli->query("SELECT * FROM stock WHERE id = $id ;"); // Récupération des informations du produit à partir de son ID

    if (empty(mysqli_fetch_assoc($produit))){
        die ("Ce produit n'existe pas"); // Arrêt de l'exécution du script si le produit n'existe pas

    }

    if(isset($_SESSION['panier'][$id])){
        $_SESSION['panier'][$id]++; // Incrémentation de la quantité du produit dans le panier s'il existe déjà
    }else {
            $_SESSION['panier'][$id]=1; // Ajout du produit dans le panier avec une quantité de 1
            echo "Le produit a bien été ajouté dans le panier"; // Affichage d'un message indiquant que le produit a été ajouté dans le panier
            var_dump($_SESSION['panier']); // Affichage du contenu du panier (pour le débogage)

        }

    

}

?>
