<?php
$id=$_SESSION['id'];
$_SESSION['page']="homepage";

$sql="SELECT article.*,user.login, liked.idArticle as liked FROM `friend` JOIN article ON article.idAuteur=friend.idAmi INNER JOIN user ON user.id=article.idAuteur LEFT join liked on liked.idArticle= article.id and liked.idUser = idAbonne WHERE idAbonne=?";
$q = $pdo->prepare($sql);
$q->execute(["$id"]);
$articles=$q -> fetchall();
echo $blade->make("homepage",array('articles' => $articles ,'id' => $id))->render();


?>
