<?php

$elements = [1,5,7,10];
$searchItem = 58;

for ($i=0; $i < 4 ; $i++) { 
    if($elements[$i] == $searchItem) {echo "Number Found"; break;}
    if($i == 3) {echo "Number Not Found"; break;}
}


?>