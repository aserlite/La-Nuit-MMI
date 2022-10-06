<?php
$id=$_SESSION['id'];
if(isset($_POST['search'])){
  $_SESSION['search']=$_POST['search'];
}
$_SESSION['page']="search";

if(isset($_SESSION['search'])){
    $sql ="select article.*,user.login, liked.idArticle as liked from article inner join user on user.id = article.idAuteur LEFT join liked on liked.idArticle= article.id and liked.idUser = ? where tags like ? order by dateEcrit desc";
    $q = $pdo -> prepare($sql);
    $q ->execute([$id, "%#".$_SESSION['search']."%"]);
    $resultS=$q -> fetchall();
}
echo $blade->make("search",array("resultS" => $resultS))->render();

?>
