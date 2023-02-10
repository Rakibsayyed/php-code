<?php
$firstname = "rakib";
$lastname = "sayyed";
$age = "21";
$address= "Bhawani peth , Pune - 411042";
$education="Second year of BCA";

$result = compact("firstname", "lastname", "age","address","education"); 
//The compact() function creates an array from variables and their values.

print_r($result);
?>