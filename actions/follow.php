<?php 
$id=$_GET['idUser'];
$idAmi=$_GET['idAmi'];
$sql ="INSERT INTO `friend`(`dateAbonnement`, `idAbonne`, `idAmi`) VALUES (NOW(),?,?)";
$q = $pdo -> prepare($sql);
$q->execute([$id,$idAmi]);
header('Location: index.php?action=friends');
?>