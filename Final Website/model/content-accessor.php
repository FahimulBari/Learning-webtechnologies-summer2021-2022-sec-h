<?php
  function generateAccessLink($url) {
    $files = scandir($url);
    $files = array_diff(scandir($url), array('.', '..'));

    foreach($files as $file){
      echo '<a class="button space" href="'.$url.$file.'">'.$file.'</a>';
    }
  }
?>