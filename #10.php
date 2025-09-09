<?php
function calc(...$args): array
{
    echo $args[0];
    echo "<br>";

    return $args;
}

$x = '10';
$y = '100';

$calc = calc($x, $y, null, true, "Data from php");



var_dump(value: $calc);
