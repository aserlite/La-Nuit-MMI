<?php
$id=$_SESSION['id'];
$idUser=$_GET['idUser'];
$idArticle=$_GET['idArticle'];
$sql = "INSERT into liked(idUser,idArticle) VALUES(?,?)";
$a = $pdo->prepare($sql);
$a->execute(["$id","$idArticle"]);

$page=$_SESSION['page'];
var_dump($_SESSION);
header("Location: index.php?action=$page#$idArticle");
?>