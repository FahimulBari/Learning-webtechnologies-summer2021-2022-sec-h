<?php
setcookie('status','false',time()-3600,'/');
header('location: signin.html');
?>