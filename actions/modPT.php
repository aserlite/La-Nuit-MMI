<?php

if(isset($_FILES['pp'])){
    $nom = $_FILES['pp']['tmp_name'];
    $ext= pathinfo($_FILES['pp']['name'], PATHINFO_EXTENSION);
    $imgname=time().$_SESSION["id"];
    $nomdestination = "./public/upload/$imgname.$ext";
    move_uploaded_file($nom, $nomdestination);

    $sql = "UPDATE `user` SET `avatar` = ? WHERE `user`.`id` = ?; ";
    $q = $pdo->prepare($sql);
    $q->execute([$nomdestination,$_SESSION['id']]);
}

if(isset($_POST['userLogin'])){
    $sql = "UPDATE `user` SET `login` = ? WHERE `user`.`id` = ?; ";
    $q = $pdo->prepare($sql);
    $q->execute([$_POST['userLogin'],$_SESSION['id']]);
}
header('Location: index.php?action=articles');
?>