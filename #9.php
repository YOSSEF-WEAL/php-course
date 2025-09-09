<?php
$x= 10;
$y= 20;

echo $x + $y;

echo "<br>";
// function calc(int $x, int $y): int {
// function calc(int $x, int $y):string {
// function calc(int $x, int $y):mixed {
// function calc(int $x, int $y):array {
function calc(int $x, int $y):object {
    $obj= new stdClass;
    $obj->total = $x + $y;
    return $obj;
}

$x= "10";
$y ="100";
// echo calc($x,$y); // 1000

calc(10,20);
echo "<br>";
echo calc(x:10,y:20)->total; // 30
echo "<br>";

var_dump(calc(x:10,y:20)); // int(200)

?>