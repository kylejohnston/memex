<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>colophon /// memex</title>
  <?php include('includes/head.php'); ?>
</head>
<body>
  <!-- CONTENT GOES HERE -->
  <header>
    <?php include('includes/header-nav.php'); ?>
  </header>
  <div class="col-1 content"><h1><span>Colophon</span></h1></div>

  <article class="col-2">
    <div class="column content">
      <h2>MEMEX is a simple PHP-based tool that finds all the images in a directory and displays them on a page.</h2>
      <p>The goal of this project was to use a minimal amount of code to create a modern, robust gallery of visual inspiration.</p>
      <h2>How it works</h2>
      <p>On each page, a variable in a snippet of PHP defines the path to an image directory:
      </p>
      <code>
        $www_root = 'http://your-url/img/';<br>
        $dir = 'img/';<br>
        include('includes/renderer.php');
      </code>
      <p><strong>renderer.php</strong> looks for any images in that directory, including JPGs, PNGs, and GIFs. For each image found, it renders in a DIV with a link to view the full-size image in a <a href="https://codepen.io/gschier/pen/HCoqh">pure CSS lightbox</a>.</p>
      <p>The images are displayed in a simple grid (using CSS Grid) and <a href="https://github.com/aFarkas/lazysizes">lazysize.js</a> is used to lazy load the images.</p>
      <p>To help with performance, I create a small version of each image (≤ 600px W), which is displayed on the page. The full-size image is loaded only when it's clicked or tapped.</p>
      <p>A bare bones, starter kit version on this application is available on GitHub: <a href="https://github.com/kylejohnston/memex-core">memex core</a>.</p>
    </div>
    <div class="column">
      <div class="inner">
        <h3>Design notes</h3>
        <p>The overall design is inspired by the principles of <a href="https://en.wikipedia.org/wiki/Brutalist_architecture">brutalism</a> and minimalism.</p>
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
        <p>For example, a screenshot of a website: <code>someurl.com/project-name</code> becomes <code>someurl_com__project-name.jpg</code></p>
        <h3>Tools used</h3>
        <p>
	        <a href="http://digitalocean.com">DigitalOcean</a> - web hosting<br>
	        <a href="https://imageoptim.com/mac">ImageOptim</a> - image optimization<br>
	        <a href="https://www.figma.com/">Figma</a> - vector graphics and logo design<br>
	        <a href="https://www.adobe.com/products/photoshop.html">Photoshop</a> - image preparation<br>
        	<a href="https://birme.net/blog/bulk-resize-images-with-sips-on-mac/">sips</a> - super-fast bulk image resizing<br>
        	<a href="https://www.panic.com/transmit/">Transmit</a> - FTP client<br>
	        <a href="http://sublimetext.com">Sublime Text</a> - coding<br>
  	    </p>
      </div>
    </div>
  </article>

  <footer>
    <?php include('includes/footer.php'); ?>
  </footer>
  <?php include('includes/foot.php'); ?>
</body>
</html>