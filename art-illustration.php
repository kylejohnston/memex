<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>art &times; illustration /// memex</title>
  <?php include('includes/head.php'); ?>
</head>
<body>
  <!-- CONTENT GOES HERE -->
  <header>
    <?php include('includes/header-nav.php'); ?>
  </header>
  <div class="content">
    <!-- 001 -->
    <h1><span>art &times; illustration</span></h1>

    <article class="col-3">
      <?php
        $www_root = 'http://memex.local/img/art-illustration';
        $dir = 'img/art-illustration';
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