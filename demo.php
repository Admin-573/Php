<?php
echo "<h1>php ch1 :-</h1>";

echo "<i>php Variables :-</i>";
echo "<br>";
$a = "This Is ";
echo "$a Variable.";

echo "<p>";

echo "<i>php Variables Scope :-</i>";
echo "<p>";
echo "This Is GLOBAL Scope :-";
$b = 5;
function global_scope()
{
    echo "This Is Inside Function $b"; 
}
global_scope();
echo "<br>This Is OutSide Function $b";

echo "<p>";

echo"This Is LOCAL Scope :-";
function local_scope()
{
    $c = 10;
    echo "<br>This Is Inside Function $c";
}
local_scope();
echo "This Is OutSide Function $c";

echo "<p>";

echo "<i>Use Global KeyWord :-</i>";
$num1 = 5;
$num2 = 5;
function global_keyword()
{
    global $num1,$num2;
    $num1 = $num1+$num2;
    echo "<br>This Is Inside Fun: $num1";
}
global_keyword();
echo "<br>This Is Outside Fun: $num1";

echo "<p>";

echo "<i>Use Of GLOBALS KeyWord :-</i>";

$num3 = 5;
$num4 = 99;

function GLOBALS_keyword()
{
    $GLOBALS['num3'] = $GLOBALS['num3'] + $GLOBALS['num4'];
}
GLOBALS_keyword();
echo "$num3";

echo "<p>";

print "<i>Use Of Static KeyWord :-</i>";
function static_keyword()
{
    static $a = 10;
    echo "<br>$a";
    $a++;
}
static_keyword();
static_keyword();
static_keyword();

echo "<p>";

echo "<i>ECHO AND PRINT STATMENTS :-</i>";
echo "<br>";
$word1 = "Hello";
print $word1 ." World";

echo "<p>";

echo "<i>PHP Data Types :-</i>";
print "<br> 1.String <br> 2.Integer <br> 3.Float(Double) <br> 4.Boolean <br> 5.Array <br> 6.Object <br> 7.Null <br> 8.Resource";

echo "<p>String :- ";
$wor1 = "Hello";
var_dump($wor1);

echo "<p>Integer :- ";
$number1 = 10;
var_dump($number1);

echo "<p>Float :- ";
$number3 = 3.5;
var_dump($number3);

echo "<p>Boolean :- ";
$var1 = true;
$var2 = false;
var_dump($var1);

echo "<p>Array :- ";
$array_items = ["VOLVO","SUPRA","FERRARI"];
var_dump($array_items);

echo "<p>Objects :- ";
class rajat
{
    function my_obj()
    {
        echo "My Object !";
    }
}
$rajat = new rajat;
$rajat -> my_obj();

echo "<p>Null :- ";
$v1 = null;
var_dump($v1);

echo "<p>";

echo "<i>Constants :-</i>";
define("ROLL_NO","573");
function myfun()
{
    echo ROLL_NO;
}
myfun();

// phpinfo()
?>
