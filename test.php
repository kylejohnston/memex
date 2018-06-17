<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>memex</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <?php include('includes/header-nav.php'); ?>
  </header>
  <article>
    <?php
      $www_root = 'http://memex.local/img';
      $dir = 'img';
      include('includes/renderer.php');
    ?>
  </article>
  <footer></footer>
</body>
</html>