<?php
$idArticle=$_GET['idArticle'];

$sql ="SELECT commentaires.*,user.login as username FROM commentaires join user ON user.id=commentaires.idUser WHERE idArticle=?";
$a = $pdo -> prepare($sql);
$a -> execute([$idArticle]);
$commentaires=$a -> fetchall();
echo $blade->make("com",array("idArticle" => $idArticle,"commentaires" => $commentaires))->render();
?>