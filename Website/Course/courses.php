<?php
$url  = $_REQUEST['url'];

$files = scandir($url);
$files = array_diff(scandir($url), array('.', '..'));

foreach($files as $file){
  echo '<a href="'.$url.$file.'">'.$file.'</a><br>';
}
?>