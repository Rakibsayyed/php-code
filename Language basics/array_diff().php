<?php
$one=array("a"=>"apple","b"=>"baseball","c"=>"cartoon","d"=>"data_base");
$two=array("e"=>"apple","f"=>"baseball","g"=>"cartoon",);
$result=array_diff($one,$two); //array_diff() is used to find the difference in the arrays
print_r($result);
?>