<?php

$text = "Ismail Founti";
echo strlen($text); // 13
echo "<br>";

echo strtoupper($text); // ISMAIL FOUNTI
echo "<br>";

echo strtolower($text); // ismail founti
echo "<br>";

echo ucfirst($text); // Ismail founti
echo "<br>";

echo strpos($text, "Founti"); // 7
echo "<br>";

echo str_replace("Founti", "founti", $text); // Ismail founti
echo "<br>";

$texxt = "Banana,Apple,Ananas";
$fruits = explode(",", $texxt);
print_r($fruits); // Array ( [0] => Banana [1] => Apple [2] => Ananas )
echo "<br>";

$colors = ["Red", "Blue", "Yellow"];
echo implode(" - ", $colors); // Red - Blue - Yellow
echo "<br>";

$tetx = "  Hello World  ";
echo trim($tetx); // "Hello World"
echo "<br>";


?>