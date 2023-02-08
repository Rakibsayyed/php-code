<?php
$sports="cricket";
function player()
{
    global $sports;
    echo "sports name inside the function"." ".$sports.PHP_EOL;
    
}
player(); 
echo "sports name out side the function"." ".$sports;
 ?>