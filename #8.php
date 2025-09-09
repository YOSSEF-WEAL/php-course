<?php
    echo "Hello, World! PHP is working.";
    echo "<br>";
    // DATA TYPE STRAING
    $a = "This is a test string.";
    echo $a;

    echo "<br>";
    // DATA TYPE INTEGER
    $B= 10;
    echo $B;
    echo "<br>";
// DATA TYPE BOOLEAN
    $c = true;
    echo $c;
    echo "<br>";

    // data type NULL
    $b= null;
    echo $b;
    echo "<br>";

    // DATA TYPE FLOAT
    $e = 10.5;
    echo $e;
    echo "<br>";

    // DATA TYPE ARRAY

    $f= ["PHP", "HTML", "CSS", "JS" , $a, 'integer' => $e, [
        'sub_data',
        'sub_data2',
        [
            'sub_sub_data1',
            'sub_sub_data2',
            'main' => 'value'
        ]
    ]];
    echo $f[5][2]["main"];
    echo "<br>";


    $g = new stdClass;
    $g->name = "php ";
    $g->age = 20;
    echo $g-> name;
    echo $g-> age;
    echo "<br>";
// $num_straing = (string)"100";
// $num_straing = (int)"100"; 
// $num_straing = (bool)"100"; 
// $num_straing = (array)"50","oj";  // erorr
$num_straing = (array)"50"; 
    $a= "php";
// var_bump(value: $a); // ERORR
$num = 20;
var_dump($num_straing);

