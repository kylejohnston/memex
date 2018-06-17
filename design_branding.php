<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>design / branding /// memex</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <?php include('includes/head.php'); ?>
</head>
<body>
  <!-- CONTENT GOES HERE -->
  <header>
    <?php include('includes/header-nav.php'); ?>
  </header>
  <div class="content">
    <h1><span>design // branding</span></h1>
    <article>
      <?php
        $www_root = 'http://memex.local/img/design/branding';
        $dir = 'img/design/branding';
        include('includes/renderer.php');
      ?>
    </article>
  </div>
  <footer>
    <?php include('includes/footer.php'); ?>
  </footer>
  <?php include('includes/foot.php'); ?>
</body>
</html>