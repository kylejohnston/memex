<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>architecture &times; space /// memex</title>
  <?php include('includes/head.php'); ?>
</head>
<body>
  <!-- CONTENT GOES HERE -->
  <header>
    <?php include('includes/header-nav.php'); ?>
  </header>
  <div class="content">
    <!-- 001 -->
    <h1><span>architecture &times; space</span></h1>
    <article class="col-3">
      <?php
        $www_root = 'img/architecture-space';
        $dir = 'img/architecture-space/preview';
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
