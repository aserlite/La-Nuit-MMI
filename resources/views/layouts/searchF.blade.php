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
    <link href="/public/css/search.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>

  <header>
  <form action="index.php?action=friends" method='post'>
      <input type="text" <?php if(isset($_SESSION['searchF'])){echo "placeholder=".$_SESSION['searchF'];}else{ echo "placeholder='Votre recherche'";}?> name="searchF" class="searchbar" required="required"> 
      <button type="submit" class="searchico"><i class='bx bx-search bx-lg' style='color:#0099ff'  ></i></button>
    </form>
  </header>


<div class="content">
  <section>
    @yield('content')
  </section>
</div>

<footer>
  <a href="index.php?action=homepage" class="ico"><i class='bx bx-home bx-lg' ></i></a>
  <a href="index.php?action=search" class="ico"><i class='bx bx-search bx-lg' ></i></a>
  <a href="index.php?action=articles" class="ico"><i class='bx bx-user bx-lg' ></i></a>
  <a href="index.php?action=logout" class="ico"><i class='bx bx-log-out-circle bx-lg' ></i></a>
</footer>
</body>
</html>
