<?php
# if-else-if is  used to combine multiple if?.else statements. So, we can check multiple conditions using this statement.
$price=25000;
if($price < 15000)
{
    echo"the product is cheap";
}
elseif($price>15000 && $price<18000)
{
    echo"the product is little bit expencive";
}
elseif($price==25000)
{
    echo "we cant by this product";
}
else{
echo"leave it";}
?>