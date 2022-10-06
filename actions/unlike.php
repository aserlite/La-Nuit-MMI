<?php
$id=$_SESSION['id'];
$idUser=$_GET['idUser'];
$idArticle=$_GET['idArticle'];
$sql = "DELETE FROM liked WHERE idUser=? AND idArticle=?";
$a = $pdo->prepare($sql);
$a->execute(["$id","$idArticle"]);
$page=$_SESSION['page'];
header("Location: index.php?action=$page#$idArticle");
?>