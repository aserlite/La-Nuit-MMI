@extends('layouts.app')

@section('content')
<?php
if(isset($_SESSION["login"])){
    echo"<div class='formulaire'>Vous etes deja connecté <a href='index.php'>Retour</a></div>";
}   else{
        echo"
            <div class='formulaire'>
            <form action='index.php?action=loginT' method='post'>
            <input type='text' name='login' id='login' placeholder='e-mail' required='required' class='formtxt'";
        if(isset($_COOKIE["remind"])){echo"value='".$_COOKIE["login"]."'";}

        echo "/><input type='password' name='mdp' id='mdp' placeholder='Mot de passe'  required='required' class='formtxt'";
        if(isset($_COOKIE["remind"])){echo"value='".$_COOKIE["mdp"]."'";}
        echo "/><input type='checkbox' name'remind' id='remind' placeholder='remind'><span>Se souvenir de moi </span>
            
            <input type='submit' value='Connexion' id='connexion' />
            <div class='changeP'>
            <span>Vous n'avez pas de compte ? </span>
            <a href='index.php?action=signin'> Vous inscrire </a>
            </div>
            </form>
            </div>
        ";
}

if(isset($_POST['tmp'])){
    echo $_POST["tmp"];  
}
$_POST["tmp"]=NULL;
?>
@endsection
