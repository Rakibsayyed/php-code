<?php
class foo{  
    public $bar;
    public function __construct($bar)
{
$this->bar=$bar;
}
public function bar() 
{
    return $this->bar; 
}

};
$rakib=new foo("hello world");
echo $rakib->bar();
?>