<?php
$com=$_POST['com'];
$idArticle=$_POST['idArticle'];
$idUser=$_SESSION['id'];
if($com != NULL AND $idArticle != NULL AND $idUser != NULL){
    $sql = "INSERT INTO commentaires (idArticle,idUser,com) VALUES(?,?,?)";
    $q =$pdo->prepare($sql);
    $q->execute([$idArticle,$idUser,$com]);
}
header('Location: index.php?action=com&idArticle='.$idArticle);
?>