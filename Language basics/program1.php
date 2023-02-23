<?php
//Q.Write a PHP script to generate simple random password [do not use rand() function].
function password_generate($chars) 
{
  $password= '123456789RAKIBsayyed@GRASss&jnfdn';
  return substr(str_shuffle($password),0, $chars);
}
  echo password_generate(5)."\n";
?>