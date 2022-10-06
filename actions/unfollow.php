<?php 
$id=$_GET['idUser'];
$idAmi=$_GET['idAmi'];
$sql ="DELETE FROM friend WHERE idAbonne=? AND idAmi=?";
$q = $pdo -> prepare($sql);
$q->execute([$id,$idAmi]);
header('Location: index.php?action=friends');
?>