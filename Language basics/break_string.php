<?php
$countries=array("INDIA","JAPAN","U.S.A","FRANCE");
foreach($countries as $country){
    if($country=="U.S.A")
    {
        break;
    }
    echo"$country".PHP_EOL;
}
?>