@extends('layouts.appOn')
@section('css')
  <link href="/public/css/publication.css" rel="stylesheet">
@endsection

@section('content')

<div class="txttop">
    <span class="inspi"> Une inspiration, une humeur ?</span>
    <span class="partagez">Partagez...</span>
</div>

<form method='post' enctype="multipart/form-data" action='index.php?action=publicationT'>

  <input type='text' name='title' id='title' placeholder='Titre de la publication'  required='required' class='formtxt'/>
  <input type='file' name='image' id='image' accept='image/*' />
  <input type='text' name='tags' id='tags' placeholder='Tags'  required='required' class='formtxt'/>
  <input type='submit' value='Publier' id='enregister'/>

</form>
@endsection
