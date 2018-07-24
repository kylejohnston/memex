<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>colophon /// memex</title>
  <?php include('includes/head.php'); ?>
  <style>.yolo{background:yellow}</style>
</head>
<body>
  <!-- CONTENT GOES HERE -->
  <header>
    <?php include('includes/header-nav.php'); ?>
  </header>
  <div class="col-1 content"><h1><span>Colophon</span></h1></div>

  <article class="col-2">
    <div class="column content">
      <h2>MEMEX is a simple PHP application that reads all images from a directory displays them on a page.</h2>
      <h2>How it works</h2>
      <p>On each page, a variable in a snippet of PHP defines the path to an image directory:
      </p>
      <code>
        $www_root = 'http://your-url/img/';<br>
        $dir = 'img/';<br>
        include('includes/renderer.php');
      </code>
      <p><strong>renderer.php</strong> looks for any images in that directory, including JPGs, PNGs, and GIFs. For each image found, it renders in a DIV with a link to view the image in a <a href="https://codepen.io/gschier/pen/HCoqh">pure CSS lightbox</a>.</p>
      <p>The images are displayed in a simple grid (using CSS Grid) and <a href="https://github.com/aFarkas/lazysizes">lazysize.js</a> is used to lazy load the images.</p>
      <p>A bare bones, starter kit version on this application is available on GitHub: <a href="https://github.com/kylejohnston/memex-core">memex core</a>.</p>
    </div>
    <div class="column">
      <div class="inner">
        <h3>Design notes</h3>
        <p><strong>Font:</strong> monospace</p>
        <p><strong>Colors:</strong>
          <span class="hexFFFCFA">#FFFCFA</span>
          <span class="hexFFF5EF">#FFF5EF</span>
          <span class="hexA6B4C2">#A6B4C2</span>
          <span class="hex4F5F6E">#4F5F6E</span>
          <span class="hex140800">#140800</span>
          <span class="hexFA8335">#FA8335</span>
        </p>
        <h3>A note on file naming</h3>
        <p>Whenever possible, files are named to give credit to (or at least hint at) the source and/or creator.</p>
        <p>For example, a screenshot of a website: <code>someurl.com/project-name</code> becomes <code>someurl_com__project-name.jpg</code> </p>
    </div>
  </article>

  <footer>
    <?php include('includes/footer.php'); ?>
  </footer>
  <?php include('includes/foot.php'); ?>
</body>
</html>