<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link href="/public/css/normalize.css" rel="stylesheet">
    <link href="/public/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <h1>Instagram</h1>
    <h2>Par MMI Création</h2>
  </header>

  <section>
    <?php echo $__env->yieldContent('content'); ?>
  </section>

  <footer>
    <img src="public/images/logoIUT.png">
    <span>IUT de Lens</span>
  </footer>
</body>
</html>
