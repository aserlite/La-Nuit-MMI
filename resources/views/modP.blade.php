@extends('layouts.appOn')
@section('css')
  <link href="/public/css/publication.css" rel="stylesheet">
@endsection
@section('content')

<form method='post' enctype="multipart/form-data" action='index.php?action=modPT'>
  <input type='text' name='userLogin' id='title' placeholder='Changer Nom Utilisateur'  class='formtxt'/>
  <label><h1>Changez Ici votre photo de Profil</h1></label>
  <input type='file' name='pp' id='image' accept='image/*' />
  <input type='submit' value='Enregistrer' id='enregister'/>
</form>

@endsection
