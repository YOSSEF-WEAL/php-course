<?php
$x = '10';
$y = '100';

function calc()
{
    // echo $GLOBALS['x'];
    // $x = 20;
    // $y = 30;
    // echo $x * $y;
    // echo "<br>";

    static $x = 1;
    echo $x;
    $x++;
    echo "<br>";
}

calc();
calc();
