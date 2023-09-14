<?php 

$mysqli = new mysqli("localhost", "root", "", "test");
$mysqli->set_charset("utf8");

if(!isset($_SESSION)) {
    session_start();

}

if(!isset($_SESSION['panier'])) {
    $_SESSION['panier']= array();

}

if (isset($_GET["id"])){
    $id =$_GET['id'];
    $produit = $mysqli->query("SELECT * FROM stock WHERE id = $id ;");

    if (empty(mysqli_fetch_assoc($produit))){
        die ("Ce produit n'existe pas");

    }

    if(isset($_SESSION['panier'][$id])){
        $_SESSION['panier'][$id]++;
    }else {
            $_SESSION['panier'][$id]=1;
            echo "Le produit a bien été ajouté dans le panier";
            var_dump($_SESSION['panier']);

        }

    

}

?>