<?php
foreach ($dir_contents as $file) {
  $explode = explode('.', $file);
  $file_type = strtolower(end($explode));
  if ( ($file !== '.') && ($file !== '..') && (in_array( $file_type, $file_display)) ) {
    echo '
    <div class="item">
    <a href="#',$file,'">
    <img class="lazyload" src="img/loader-x.svg" data-src="', $www_root, '/preview/', $file,'" alt="', $file, '" width="auto">
    </a>
    </div>
    <a href="#_" class="lightbox" id="',$file,'"><img class="lazyload" src="img/loader-m.svg" data-src="', $www_root, '/fullsize/', $file, '"></a>'
    ;
    //break;
  }
}
?>
