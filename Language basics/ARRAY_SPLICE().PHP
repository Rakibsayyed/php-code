<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);//array_splice() function removes selected elements from an array and replaces it with new elements.
print_r($a1);
?>