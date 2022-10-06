<?php
$title=$_POST['title'];
$tags=$_POST['tags'];
$idA=$_SESSION['id'];
if ($_FILES['image']['error']) {
  echo"pas bien";
  }else{
    $nom = $_FILES['image']['tmp_name'];
    $ext= pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $imgname=time().$_SESSION["id"];
    $nomdestination = "./public/upload/$imgname.$ext";
    move_uploaded_file($nom, $nomdestination);
    $sql = "INSERT INTO article (titre,dateEcrit,img_url,idAuteur,tags) VALUES('$title',NOW(),'$nomdestination',$idA,'$tags')";
    $q = $pdo->prepare($sql);
    $q->execute();
    header('Location: index.php?action=homepage');
  }

?>