<?php 
namespace Calc;
class calculator1{
echo "Enter two numbers";
$x=readline();
$y=readline();
calculation($x,$y);
function calculation($x,$y)
{
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
?>
