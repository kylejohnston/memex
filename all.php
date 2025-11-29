<?php
/**
 * All Images Index
 * Displays all images from across all fullsize directories
 */

// Configuration
define('IMG_EXTENSIONS', ['webp', 'jpg', 'jpeg', 'png', 'gif']);

/**
 * Find all images in fullsize directories (at any depth)
 */
function findAllImages() {
    $images = [];

    // Create recursive iterator for img directory
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator('img', RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($iterator as $file) {
        if (!$file->isFile()) continue;

        $filepath = $file->getPathname();

        // Only include files in fullsize directories
        if (strpos($filepath, '/fullsize/') === false) continue;

        $extension = strtolower($file->getExtension());
        if (in_array($extension, IMG_EXTENSIONS)) {
            $images[] = $filepath;
        }
    }

    return $images;
}

/**
 * Convert fullsize path to preview path
 */
function getPreviewPath($fullsizePath) {
    return str_replace('/fullsize/', '/preview/', $fullsizePath);
}

// Main execution
$allImages = findAllImages();
shuffle($allImages); // Shuffle all images together

// Prepare images for display (convert to array format expected by template)
$all_images = [];
foreach ($allImages as $fullsizePath) {
    $all_images[] = [
        'filepath' => getPreviewPath($fullsizePath),
        'fullpath' => $fullsizePath
    ];
}

$total_count = count($all_images);
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
  <h1><span>All (<?php echo $total_count; ?>)</span></h1>
  <article>

  <?php

  // Display the shuffled images
  foreach ($all_images as $image) {
    echo '
    <div class="item" style="aspect-ratio: 1 / 1.25;">
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
