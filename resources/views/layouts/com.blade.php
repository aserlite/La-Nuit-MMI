<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    @section('css')
    @show
    <link href="/public/css/normalize.css" rel="stylesheet">
    <link href="/public/css/com.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <a href="index.php?action=homepage" class="logo"><h1>Instagram</h1></a>
    <div>
      <a href="index.php?action={{$_SESSION['page']}}#{{$idArticle}}" class="ico"><i class='bx bx-exit bx-lg'></i> </a>   
    </div>
  </header>


<div class="content">
  <section>
    @yield('content')
  </section>
  @foreach($commentaires as $line)
    <div class="commentaire">
      <a href='index.php?action=articles&id={{$line['idUser']}}' class='username'>{{$line['username']}}</a>
      <span class="com"> {{$line['com']}} </span>
    </div>
  @endforeach
</div>

  <footer>
    <form action="index.php?action=comT" method='post'>
      <textarea type="text" placeholder="Laissez votre avis !" name="com" class="searchbar" required="required"> </textarea>
      <button type="submit" class="searchico"><i class='bx bx-send bx-lg' style='color:#0099ff'  ></i></button>
      <input type="hidden" style='display:none;' name="idArticle" value="{{$idArticle}}">
    </form>
</footer>
</body>
</html>

