<?php
$n=1;
for(;;)// If we don't pass parameters, it will execute infinite.

{
    echo"$n++".PHP_EOL;
}
for($i=1;;$i++)
{if($i>9){break;
}
echo $i;}

?>