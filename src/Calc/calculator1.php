<?php 
namespace Calc;
class calculator1{
 function calculation()
{
echo "Enter two numbers";
$x=readline();
$y=readline();
echo "choose option:";
echo "add \n";
echo "sub \n";
$e=readline();
switch($e){
case "add":
echo $x+$y;
break;
case "sub":
echo $x-$y;
break;
}
}
}
?>
