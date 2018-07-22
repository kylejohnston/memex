<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>color /// memex</title>
  <?php include('includes/head.php'); ?>
</head>
<body>
  <!-- CONTENT GOES HERE -->
  <header>
    <?php include('includes/header-nav.php'); ?>
  </header>
  <div class="content">
    <!-- 001 -->
    <h1><span>color</span></h1>
    <!-- <article><div class="item"><img src="img/1-IMG.jpg"></div></article> -->

    <article class="col-3">
      <?php
        $www_root = 'http://memex.local/img/color';
        $dir = 'img/color';
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