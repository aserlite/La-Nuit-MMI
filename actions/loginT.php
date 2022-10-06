<?php
if(isset($_POST["login"]) AND isset($_POST["mdp"])){
    
    $email=$_POST["login"];
    $mdp=$_POST["mdp"];


    $sql = "SELECT * FROM user WHERE email=? AND mdp=?";
    $q = $pdo->prepare($sql);
    $q->execute([$email,sha1($mdp)]);
    $tabT=$q -> fetchall();
    $test=0;
    if($tabT != NULL){
        foreach($tabT as $line){
            $_SESSION['id']= $line["id"];
        }
        $test=1;
        header('Location: index.php?action=homepage');
    }
    if($test==0){
        $_POST['tmp']="Mauvais login, veuillez réessayer";
        header('Location: index.php?action=login');
    }
}
?>
