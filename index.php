<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>memex</title>
  <?php include('includes/head.php'); ?>
</head>
<body class="home">
  <header>
    <h1 class="column"><a href="/"><svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 90"><title>memex logo</title><path d="M410.73.73a2.49,2.49,0,0,1,3.52,0L455,41.48,495.75.73a2.49,2.49,0,0,1,3.52,3.52L458.52,45l40.75,40.75a2.49,2.49,0,0,1-3.52,3.52L455,48.52,414.25,89.27a2.49,2.49,0,0,1-3.52-3.52L451.48,45,410.73,4.25A2.49,2.49,0,0,1,410.73.73Z"/><path d="M89.88,9.83a10.92,10.92,0,0,0-1.06-4.17,10.53,10.53,0,0,0-4.48-4.48A10.92,10.92,0,0,0,80.17.12C78.71,0,76.91,0,74.73,0H70.37a6,6,0,0,0-5.09,2.82L45,35.28,24.72,2.82A6,6,0,0,0,19.63,0H15.27c-2.18,0-4,0-5.44.12A10.92,10.92,0,0,0,5.66,1.18,10.53,10.53,0,0,0,1.18,5.66,10.92,10.92,0,0,0,.12,9.83C0,11.29,0,13.09,0,15.27V87.36A2.6,2.6,0,0,0,2.24,90,2.5,2.5,0,0,0,5,87.5V15.38c0-2.32,0-3.91.1-5.14a4.88,4.88,0,0,1,.73-2.62A6.92,6.92,0,0,1,7.62,5.83a4.88,4.88,0,0,1,2.62-.73C11.47,5,13.06,5,15.38,5h3.15a3,3,0,0,1,2.54,1.41L44.15,43.35a1,1,0,0,0,1.7,0L68.94,6.41A3,3,0,0,1,71.48,5h3.14c2.32,0,3.91,0,5.14.1a4.88,4.88,0,0,1,2.62.73,6.92,6.92,0,0,1,1.79,1.79,4.88,4.88,0,0,1,.73,2.62c.1,1.23.1,2.82.1,5.14v72A2.6,2.6,0,0,0,87.24,90,2.5,2.5,0,0,0,90,87.5V15.27C90,13.09,90,11.29,89.88,9.83Z"/><path d="M294.88,9.83a10.92,10.92,0,0,0-1.06-4.17,10.53,10.53,0,0,0-4.48-4.48A10.92,10.92,0,0,0,285.17.12C283.71,0,281.91,0,279.73,0h-4.36a6,6,0,0,0-5.09,2.82L250,35.28,229.72,2.82A6,6,0,0,0,224.63,0h-4.36c-2.18,0-4,0-5.44.12a10.92,10.92,0,0,0-4.17,1.06,10.53,10.53,0,0,0-4.48,4.48,10.92,10.92,0,0,0-1.06,4.17c-.12,1.46-.12,3.26-.12,5.44V87.36A2.6,2.6,0,0,0,207.24,90,2.5,2.5,0,0,0,210,87.5V15.38c0-2.32,0-3.91.1-5.14a4.88,4.88,0,0,1,.73-2.62,6.92,6.92,0,0,1,1.79-1.79,4.88,4.88,0,0,1,2.62-.73c1.23-.1,2.82-.1,5.14-.1h3.15a3,3,0,0,1,2.54,1.41l23.08,36.94a1,1,0,0,0,1.7,0L273.94,6.41A3,3,0,0,1,276.48,5h3.14c2.32,0,3.91,0,5.14.1a4.88,4.88,0,0,1,2.62.73,6.92,6.92,0,0,1,1.79,1.79,4.88,4.88,0,0,1,.73,2.62c.1,1.23.1,2.82.1,5.14v72A2.6,2.6,0,0,0,292.24,90,2.5,2.5,0,0,0,295,87.5V15.27C295,13.09,295,11.29,294.88,9.83Z"/><path d="M119.83.12a10.92,10.92,0,0,0-4.17,1.06,10.53,10.53,0,0,0-4.48,4.48,10.92,10.92,0,0,0-1.06,4.17c-.12,1.46-.12,3.26-.12,5.44v4.36a6,6,0,0,0,2.82,5.09L145.28,45,112.82,65.28A6,6,0,0,0,110,70.37v4.36c0,2.18,0,4,.12,5.44a10.92,10.92,0,0,0,1.06,4.17,10.53,10.53,0,0,0,4.48,4.48,10.92,10.92,0,0,0,4.17,1.06c1.46.12,3.26.12,5.44.12h57.09A2.6,2.6,0,0,0,185,87.76,2.5,2.5,0,0,0,182.5,85H125.38c-2.32,0-3.91,0-5.14-.1a4.88,4.88,0,0,1-2.62-.73,6.92,6.92,0,0,1-1.79-1.79,4.88,4.88,0,0,1-.73-2.62c-.1-1.23-.1-2.82-.1-5.14V71.47a3,3,0,0,1,1.41-2.54l36.94-23.08a1,1,0,0,0,0-1.7L116.41,21.06A3,3,0,0,1,115,18.52V15.38c0-2.32,0-3.91.1-5.14a4.88,4.88,0,0,1,.73-2.62,6.92,6.92,0,0,1,1.79-1.79,4.88,4.88,0,0,1,2.62-.73c1.23-.1,2.82-.1,5.14-.1h57A2.6,2.6,0,0,0,185,2.76,2.5,2.5,0,0,0,182.5,0H125.27C123.09,0,121.29,0,119.83.12Z"/><path d="M324.83.12a10.92,10.92,0,0,0-4.17,1.06,10.53,10.53,0,0,0-4.48,4.48,10.92,10.92,0,0,0-1.06,4.17c-.12,1.46-.12,3.26-.12,5.44v4.36a6,6,0,0,0,2.82,5.09L350.28,45,317.82,65.28A6,6,0,0,0,315,70.37v4.36c0,2.18,0,4,.12,5.44a10.92,10.92,0,0,0,1.06,4.17,10.53,10.53,0,0,0,4.48,4.48,10.92,10.92,0,0,0,4.17,1.06c1.46.12,3.26.12,5.44.12h57.09A2.6,2.6,0,0,0,390,87.76,2.5,2.5,0,0,0,387.5,85H330.38c-2.32,0-3.91,0-5.14-.1a4.88,4.88,0,0,1-2.62-.73,6.92,6.92,0,0,1-1.79-1.79,4.88,4.88,0,0,1-.73-2.62c-.1-1.23-.1-2.82-.1-5.14V71.47a3,3,0,0,1,1.41-2.54l36.94-23.08a1,1,0,0,0,0-1.7L321.41,21.06A3,3,0,0,1,320,18.52V15.38c0-2.32,0-3.91.1-5.14a4.88,4.88,0,0,1,.73-2.62,6.92,6.92,0,0,1,1.79-1.79,4.88,4.88,0,0,1,2.62-.73c1.23-.1,2.82-.1,5.14-.1h57A2.6,2.6,0,0,0,390,2.76,2.5,2.5,0,0,0,387.5,0H330.27C328.09,0,326.29,0,324.83.12Z"/></svg></a></h1>
    <div class="column headline"><h2>A collection of visual inspiration.</h2></div>
  </header>
  <article class="col-2 gap--40">
    <div class="column order--1">
      <div class="intro">
        <!-- <p>&horbar;&horbar;</p> -->
        <p>The term <i>MEMEX</i> comes from <a href="https://en.wikipedia.org/wiki/Vannevar_Bush">Vanner Bush’s</a> 1945 <i>The Atlantic Monthly</i> article <a href="https://www.theatlantic.com/magazine/archive/1945/07/as-we-may-think/303881/">“As We May Think.”</a> The MEMEX is described as “a device in which an individual stores all their books, records, and communications, and which is mechanized so that it may be consulted with exceeding speed and flexibility” and an “enlarged intimate supplement to memory.”</p>
      </div>
      <p>This MEMEX is a simple application that finds all the images in a directory and displays them on a page.</p>
      <p>Read the <a href="colophon.php">colophon</a> for more information about how this MEMEX works. View the <a href="changelog.php">changelog</a> for recent updates.</p>
      <p class="small">&horbar;&horbar;A <a href="https://www.flow14.com">flow14</a> project</p>
    </div>
    <div class="column order--2">
      <h2 class="spacer--0">Categories:</h2>
      <div class="categories">
        <p><a class="bold" href="art-illustration.php">art &times; illustration</a></p>
        <p><a class="bold" href="color.php">color</a></p>
        <p><a class="bold" href="copywriting.php">copywriting</a></p>
        <p><a class="bold" href="design.php">design</a> &horbar;&horbar;<br>
          <a href="design-apps.php">apps</a>,
          <a href="design-branding.php">brand &times; logos</a>,
          <a href="design-business-cards.php">business cards</a>,
          <a href="design-data-visualization.php"><nobr>data visualization</nobr></a>,
          <a href="design-goods.php">goods</a>,
          <a href="design-logos.php">logos</a>,
          <a href="design-patterns.php">patterns</a>,
          <a href="design-political.php">political</a>,
          <a href="design-process.php">process</a>,
          <a href="design-space.php">space</a>,
          <a href="design-typography.php">typography</a>
        </p>
        <p><a class="bold" href="ephemera.php">ephemera</a></p>
        <p><a class="bold" href="photography.php">photography</a></p>
        <p><a class="bold" href="strategy.php">strategy</a></p>
        <p><a class="bold" href="quotes.php">quotes</a></p>
        <p><a class="bold" href="websites.php">web design</a> &horbar;&horbar;<br>
          <a href="websites-agency-portfolio.php">agency &times; portfolio</a>,
          <a href="websites-elements.php">elements</a>,
          <a href="websites-product.php">product,</a>
          <a href="websites-ux-wireframes.php">ux &times; wireframes</a>
        </p>
        <p><span class="hexFFF5EF"><a href="inbox.php">inbox</a></span></p>
      </div>
        <p>&horbar;&horbar;&horbar;&horbar;<br><a href="changelog.php">Changelog</a> : Last update 2021-OCT-06</p>
    </div>
  </article>
  <?php include('includes/foot.php'); ?>
</body>
</html>
