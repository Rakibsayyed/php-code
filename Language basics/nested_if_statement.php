<?php
#The nested if statement contains the if block inside another if block. 
#The inner if statement executes only when specified condition in outer if statement is true.
$age=20;
$address="pune";
if($age>18){
    if($address=="pune")
    {
        echo"he live in pune";
    }
}
else{
    echo"he is not pune";
}
?>