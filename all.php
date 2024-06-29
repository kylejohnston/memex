<?php

$total_count = 0; // Initialize a counter

$directories = array(
  'img/architecture-space/preview',
  'img/art-illustration/preview',
  'img/color/preview',
  'img/copywriting/preview',
  'img/design/apps/preview',
  'img/design/brand-logos/preview',
  'img/design/business-cards/preview',
  'img/design/data-visualization/preview',
  'img/design/patterns/preview',
  'img/design/political/preview',
  'img/design/process/preview',
  'img/design/typography/preview',
  'img/design/visual-design/preview',
  'img/goods/preview',
  'img/inbox/preview',
  'img/photography/preview',
  'img/quotes/preview',
  'img/strategy/preview',
  'img/websites/agency-portfolio/preview',
  'img/websites/elements/preview',
  'img/websites/product/preview',
  'img/websites/ux-wireframes/preview',
  'img/websites/websites/preview'
);
$file_display = array('jpg', 'jpeg', 'png', 'gif', 'webp');

$all_images = array(); // Array to store images from all directories

foreach ($directories as $dir) { 
  if (file_exists($dir) == false) {
    echo 'Directory \'', $dir, '\' not found!';
  } else {
    $www_root = str_replace('/preview', '', $dir); 
    
    // Count the files
    $dir_contents = scandir($dir);
    $file_count = count($dir_contents) - 3;  
    $total_count += $file_count; // Add to the total
    
    foreach ($dir_contents as $file) {
      $explode = explode('.', $file);
      $file_type = strtolower(end($explode));
      
      if (($file !== '.') && ($file !== '..') && (in_array( $file_type, $file_display))) {
        $all_images[] = array( 
          'filepath' => $www_root . '/preview/' . $file,
          'fullpath' => $www_root . '/fullsize/' . $file
        ); 
      }
    }
  }
}

shuffle($all_images); // Shuffle all images together
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>index /// memex</title>
<?php include('includes/head.php'); ?>
</head>
<body>
<!-- CONTENT GOES HERE -->
<header>
<?php include('includes/header-nav.php'); ?>
</header>
<div class="content">
  <h1><span>All* (<?php echo $total_count; ?>)</span></h1>
  <article>

  <?php

  // Display the shuffled images
  foreach ($all_images as $image) {
    echo '
    <div class="item">
      <a href="#',$image['fullpath'],'">
        <img class="lazyload" src="img/loader-x.svg" data-src="', $image['filepath'],'" alt="', htmlspecialchars(pathinfo($image['filepath'], PATHINFO_BASENAME)), '" width="auto">
      </a>
    </div>
    <a href="#_" class="lightbox" id="',$image['fullpath'],'">
      <img class="lazyload" src="img/loader-m.svg" data-src="', htmlspecialchars($image['fullpath']), '">
    </a>';
  }

  ?>

  </article>
</div>
<footer>
  <?php include('includes/footer.php'); ?>
</footer>
  <?php include('includes/foot.php'); ?>
</body>
</html>
