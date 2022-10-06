<?php
if(isset($_POST['searchF'])){
    $_SESSION['searchF']= $_POST['searchF'];
}
$id=$_SESSION['id'];


if(isset($_SESSION['searchF'])){
    $sql2="select user.id as idUser, user.login as login, friend.dateAbonnement as dt_sub, friend.idAmi as idAmi from user left join friend on user.id=friend.idAmi where login like ? and user.id != ?";
    $a = $pdo -> prepare($sql2);  
    $a ->execute(["%".$_SESSION['searchF']."%",$id]);
    $friends = $a -> fetchall();    
}

$sql ="select user.id as idUser,user.login as login,friend.dateAbonnement as dt_abo from friend inner join user on user.id=friend.idAmi where friend.idAbonne =?";
$q = $pdo -> prepare($sql);
$q ->execute([$id]);
$abo=$q -> fetchall();

echo $blade->make("friends",array("friends" => $friends,"id" => $id,"abo" => $abo ))->render();
?>