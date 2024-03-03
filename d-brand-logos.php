<?php
  $www_root = 'img/design/brand-logos';
  $dir = 'img/design/brand-logos/preview';
  include('includes/renderer-head.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>design / brand &times; logos /// memex</title>
  <?php include('includes/head.php'); ?>
</head>
<body>
  <!-- CONTENT GOES HERE -->
  <header>
    <?php include('includes/header-nav.php'); ?>
  </header>
  <div class="content">
    <h1><span>design <span class="dash"></span> brand<span class="nudge-x">×</span>logos (<?php echo $total_count; ?>)</span></h1>
    <article>
      <?php
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
