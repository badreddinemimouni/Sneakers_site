<!DOCTYPE html>

<?php
// Démarrage de la session
$a = session_id();
if (empty($a)) {
    session_start();
}
try {
    // Connexion à la base de données MySQL
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=users;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    // En cas d'erreur de connexion à la base de données, afficher l'erreur
    die('Erreur : ' . $e->getMessage());
}

// Récupération des valeurs du formulaire
$Util = htmlentities($_POST['email']);
$mdp = htmlentities($_POST['mdp']);

if (isset($Util) && isset($mdp)) {
    // Requête SQL pour vérifier l'existence de l'utilisateur dans la table user_site
    $sql = ("SELECT * FROM user_site WHERE email='$Util' AND password='$mdp'");
    $account = $pdo->prepare($sql);
    $account->execute();
    $acc = $account->fetchAll();
    $_SESSION['verif']=true;

    $nbr_lignes = count($acc);
    if ($nbr_lignes == 1) {
        // Si l'utilisateur existe, récupérer son grade (admin ou client)
        $sql1 = ("SELECT Grade FROM user_site WHERE email='$Util' AND password='$mdp'");
        $stmt = $pdo->query($sql1);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($row['Grade'] == 'admin') {
                // Si l'utilisateur a le grade "admin", mettre les variables de session appropriées et rediriger vers la page "main.php"
                $_SESSION['admin'] = true;
                header("Location: main.php");
                $_SESSION['client'] = false;
                $_SESSION['personne'] = false;
            } elseif ($row['Grade'] == 'client') {
                // Si l'utilisateur a le grade "client", mettre les variables de session appropriées et rediriger vers la page "main.php"
                $_SESSION['client'] = true;
                header("Location: main.php");
                $_SESSION['personne'] = false;
            }
        }
    } else {
        // Si l'utilisateur n'existe pas ou les identifiants sont incorrects, afficher un message d'erreur
        header("Location: incorrect.php");
        $_SESSION['mdp'] = false;

    }
}

// Pour récupérer les valeurs Util et MDP : $Util = $_POST['email'] et $mdp = $_POST['mdp']
?>
