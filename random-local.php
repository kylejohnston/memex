<?php
/**
 * Random Image Selection Tool
 * Displays random images from across all fullsize directories with download links
 */

// Configuration
define('TARGET_COUNT', 36);
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

/**
 * Select random images from the pool
 */
function selectRandomImages($images, $count) {
    $totalImages = count($images);

    // If we have fewer images than requested, return all
    if ($totalImages <= $count) {
        shuffle($images);
        return $images;
    }

    // Randomly select images
    $selectedKeys = array_rand($images, $count);
    $selected = [];

    foreach ($selectedKeys as $key) {
        $selected[] = $images[$key];
    }

    // Shuffle to avoid directory grouping
    shuffle($selected);

    return $selected;
}

// Main execution
$allImages = findAllImages();
$selectedImages = selectRandomImages($allImages, TARGET_COUNT);
$totalFound = count($allImages);
$displayCount = count($selectedImages);

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Random Image Selection /// memex</title>
<link rel="stylesheet" href="css/styles.css">
<style>
.meta {
    color: #666;
    font-size: 14px;
    margin-bottom: 20px;
}
.download-icon {
    position: absolute;
    bottom: 8px;
    right: 8px;
    background: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(24, 24, 24, 0.16);
    color: var(--background);
    padding: 8px 12px;
    border-radius: 6px;
    text-decoration: none;
    z-index: 10;
    font-size: 1.2rem;
    transition: all 0.2s ease-in-out;
}
.download-icon:hover {
    background: var(--text);
    transform: scale(1.05);
}
</style>
</head>
<body>
<header>
<?php include('includes/header-nav.php'); ?>
</header>
<div class="content">
    <h1><span>Random Selection (<?php echo $displayCount; ?>/<?php echo $totalFound; ?>)</span></h1>

    <?php if (empty($selectedImages)): ?>
        <p>No images found in fullsize directories.</p>
    <?php else: ?>
        <article>
        <?php foreach ($selectedImages as $image):
            $previewPath = getPreviewPath($image);
            $filename = basename($image);
        ?>
            <div class="item" style="position: relative; aspect-ratio: 4 / 5;">
                <a href="#<?php echo htmlspecialchars($image); ?>">
                    <img src="<?php echo htmlspecialchars($previewPath); ?>"
                         alt="<?php echo htmlspecialchars($filename); ?>"
                         width="auto">
                </a>
                <a href="<?php echo htmlspecialchars($image); ?>"
                   download="<?php echo htmlspecialchars($filename); ?>"
                   class="download-icon">
                    ↓
                </a>
            </div>
            <a href="#_" class="lightbox" id="<?php echo htmlspecialchars($image); ?>">
                <img src="<?php echo htmlspecialchars($image); ?>">
            </a>
        <?php endforeach; ?>
        </article>
    <?php endif; ?>
</div>
</body>
</html>
