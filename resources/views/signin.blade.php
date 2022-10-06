@extends('layouts.app')

@section('content')
@if(isset($_SESSION["login"]))

    <span>Bienvenue {{$_SESSION["login"]}}, vous etes deja connecté </span>
    <br/><a href='index.php?action=disconnect'>Deconnecter</a>
    

@else
    
    <div class='formulaire'>
    <form action='index.php?action=signinT' method='post'>
    <input type='text' name='id' id='id' placeholder='Identifiant' required='required' class='formtxt'/>

    <input type='email' name='mail' id='mail' placeholder='email'  required='required' class='formtxt'/>

    <input type='password' name='mdp' id='mdp2' placeholder='Mot de passe'  required='required' class='formtxt'/>
    <input type='password' name='mdpC' id='mdp' placeholder='Confirmation Mot de passe'  required='required'class='formtxt'/>

    <input type='submit' value='S&rsquo;enregistrer' id='enregister'/>
    @if(isset($tmp['eror']))<p class='eror'>{{$tmp['eror']}}</p>@endif
    <div class='changeP'>
    <span>Vous avez deja un compte ? </span>
    <a href='index.php?action=login'> Vous connecter </a>
    </div>
    </form>
    
    </div>
@endif
@endsection