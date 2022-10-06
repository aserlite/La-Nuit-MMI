<?php
$monTitre = "Instagram";
if (isset($_SESSION["login"])){
    echo $blade->make("index", ["titre" => $monTitre])->render();
}else{
    echo $blade->make("login",["titre" => $monTitre])->render();
}



?>
