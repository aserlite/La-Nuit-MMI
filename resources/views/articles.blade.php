@extends('layouts.appOn')
@section('css')
  <link href="/public/css/articles.css" rel="stylesheet">
@endsection
@section('content')
<div class="headAcc">
  <div class="pp">
    @if(isset($userInfo['avatar']))
    <img src="{{$userInfo['avatar']}}">
    @else
    <img src="public/images/ppD.jpg">
    @endif
  </div>
  <p class="pseudo">{{$userInfo["login"]}}</p>   
  @if($userInfo['id']=$_SESSION['id'])
  <a href='index.php?action=modP' class='modP'>Modifier Profil</a>
  @endif
</div>
@if(isset($articles))
  @foreach($articles as $line)
  <div class='article-container' id='{{$line['id']}}'><a href='index.php?action=articles&id={{$line['idAuteur']}}' class='username'>{{$line['login']}}</a>
    <img src='{{$line['img_url']}}' class='illustration'>
    <span class='titleArticle'>{{$line['titre']}}</span>
    <div class='wrapper'>
    <span class='tagsArticle'>{{$line['tags']}}</span> 
    <a href='index.php?action=com&idArticle={{$line['id']}}' class='ico'><i class='bx bx-message-rounded-dots bx-lg'></i></a>
      @if(isset($line['liked']))
        <a href='index.php?action=unlike&idUser={{$id}}&idArticle={{$line["id"]}}' class='ico'><i class='bx bxs-heart bx-lg' style='color:#ff0000'  ></i></a>
      
      @else
        <a href='index.php?action=like&idUser={{$id}}&idArticle={{$line['id']}}' class='ico'><i class='bx bx-heart bx-lg' ></i></a>
      @endif
    </div></div>
  
  @endforeach
@else
    <div class='pasArticles'>
    <span> Cet utilisateur n'a pas encore ecris d'articles. <br/><br/>Nous vous invitons a essayer cette fonctionalité en cliquant sur l'icone en haut a droite de votre écran. </span>
    </div>
@endif
<div class='sep'></div>
@endsection
