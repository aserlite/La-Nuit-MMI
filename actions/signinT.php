<?php
    if(isset($_SESSION['login'])){
        echo"vous etes deja connecté";
    }elseif(isset($_POST["id"]) AND isset($_POST["mdp"])){
            
            $login=$_POST["id"];
            $mdp=$_POST["mdp"];
            $mail=$_POST["mail"];
            $mdpC=$_POST["mdpC"];

            $sql = "SELECT * from user where email=?";
            $q = $pdo->prepare($sql);
            $q->execute([$mail]);
            $tabmail=$q -> fetchall();

            $sql = "SELECT * from user where login=?";
            $a = $pdo->prepare($sql);
            $a->execute([$login]);
            $tablogin=$a -> fetchall();
            $test=0;
            if($mdp!=$mdpC){
                $test=1;
                $_POST['tmp']="Veuillez entrer deux fois le meme mot de passe";
            }elseif($tabmail != NULL){ 
                $test=2;
                $_POST['tmp']="Cette adresse mail est deja utilisée";
            }elseif($tablogin != NULL){
                $test=3;
                $_POST['tmp']="Ce nom d'utilisateur est deja utilisé";
            }
            if($test==0){
                $sql = "INSERT INTO user (login, mdp, email) VALUES (?,?,?);"; 
                $q =$pdo->prepare($sql);
                $q->execute([$login,sha1($mdp),$mail]);
                $_SESSION['login']=$login;
                $_SESSION['id']= $pdo->lastInsertId();
                header('Location: index.php?action=homepage');
            }elseif($test==1){
                header('Location: index.php?action=signin');
            }
        }else{
            echo"erreur";
        }
?>