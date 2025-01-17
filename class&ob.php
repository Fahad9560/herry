<?php
class mathoperation{
    function sum(){
        echo 50+70;
    }

}

//object//
$math=new mathoperation();
$math->sum();


// new class //
echo"<br/>";
class biopractice{
    function multi(){
        echo 80*80;
    }
}
$bio=new biopractice();
$bio->multi();

//new//

echo"<br/>";

class mathoperation1{
    function sum($a,$b,$C){
        echo $a+$b+$C;
    }
}

$math=new mathoperation1();
$math->sum(50,100,50);

?>