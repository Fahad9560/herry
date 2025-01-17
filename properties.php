<?php
class properties{
    public $name="fahad choudhary";
    function getname(){
        echo $this->name;
    }

}

$p1=new properties();
$p1->getname();

echo"<br/>";



?>