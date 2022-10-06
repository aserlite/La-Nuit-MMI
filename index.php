<?php
include("config/bd.php");
include("config/actions.php");
include("config/blade.php");


session_start();
ob_start(); // Je démarre le buffer de sortie : les données à afficher sont stockées

?>

<?php
// Quelle est l'action à faire ?
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "index";
}

// Est ce que cette action existe dans la liste des actions
if (array_key_exists($action, $listeDesActions) == false) {
    echo $blade->make('errors.404')->render();
} else {
    include($listeDesActions[$action]); // Oui, on la charge
}

if(isset($_SESSION['info']))
    unset($_SESSION['info']);

ob_end_flush(); // Je ferme le buffer, je vide la mémoire et affiche tout ce qui doit l'être
?>
