@extends('layouts.search')
@section('css')
  <link href="/public/css/articles.css" rel="stylesheet">
@endsection
@section('content')
  @if(isset($_SESSION['search']))
    @foreach($resultS as $line)
      <div id='{{$line['id']}}' class='article-container'>
        <a href='index.php?action=articles&id={{$line['idAuteur']}}' class='username'>{{$line['login']}}</a>
      <img src='{{$line['img_url']}}' class='illustration'>
      <span class='titleArticle'>{{$line['titre']}}</span>
      <div class='wrapper'>
      <span class='tagsArticle'>{{$line['tags']}}</span> 
      <a href='index.php?action=com&idArticle={{$line['id']}}' class='ico'><i class='bx bx-message-rounded-dots bx-lg'></i></a>
    
      @if(isset($line['liked']))
        <a href='index.php?action=unlike&idUser={{$line['idAuteur']}}&idArticle={{$line['id']}}' class='ico'>
          <i class='bx bxs-heart bx-lg' style='color:#ff0000'></i>
        </a>
      @else
        <a href='index.php?action=like&idUser={{$line['idAuteur']}}&idArticle={{$line['id']}}' class='ico'>
          <i class='bx bx-heart bx-lg' ></i>
        </a>
      @endif
    </div></div>
    @endforeach
  @endif
  <div class='sep'></div>
@endsection