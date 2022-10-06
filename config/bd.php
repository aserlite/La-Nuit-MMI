<?php
// Script login.php utilisé pour la connexion à la BD

// a l'iut ipabdd
$host = "localhost"; // le chemin vers le serveur (localhost dans 99% des cas)

// A l IUT, prenomnom
// ordi perso, a vous de le créer.
$db = "Instagram";

// A l iut prenom.nom
// windows : root
// Mac : root
$user = "admin";

// A l iut, généré automatiquement
// windows : vide
// Mac : root
$passwd = "mysql";

try {
    // On essaie de créer une instance de PDO.
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $passwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br />";
    die(1);
}


?>
