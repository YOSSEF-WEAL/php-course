<?php
$a = 'welcome to php';

echo str_word_count(string: $a);
echo "<br>";

$arr = ["php", "java", "c++", "python"];
echo count(value: $arr);
echo "<br>";

$c = "hello to world";
echo str_replace(search: "to", replace: "in", subject: $c);
echo "<br>";

$result = explode(' ', $c);
var_dump($result[2]);
echo "<br>";

echo implode(separator: ", ", array: $arr);
echo "<br>";
$str = "|PHP V8|";
$str = ltrim(string: $str, characters: "|");
$str = rtrim(string: $str, characters: "|");
echo $str;
echo "<br>";

// echo phpinfo();

echo strtoupper(string: $c);
echo "<br>";
echo strlen(string: $c);
echo "<br>";
echo str_contains(haystack: $c, needle: "world");
echo "<br>";

function calc()
{
    echo "hello world";
};

var_dump(function_exists(function: 'calc'));

echo "<br>";

echo substr(string: $str, offset: -1);
