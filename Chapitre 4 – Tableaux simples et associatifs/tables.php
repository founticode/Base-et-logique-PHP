<?php

// ===== Example 1: Browsing an indexed array using for + count() =====
$colors = ["Red", "Blue", "Green"];

for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "<br>";
}

echo "<br>";

// ===== Example 2: Adding elements to an array using array_push() =====
$numbers = [10, 20, 30];

// Add a new number to the end of the array
array_push($numbers, 40);

// Display all numbers using foreach
foreach ($numbers as $num) {
    echo $num . "<br>";
}

echo "<br>";

// ===== Example 3: Merging two arrays using array_merge() =====
$a = ["A", "B"];
$b = ["C", "D"];

// Merge arrays into one
$result = array_merge($a, $b);

// Display merged array
foreach ($result as $rere) {
    echo $rere . "<br>";
}

echo "<br>";

// ===== Example 4: Looping through an array again using for + count() =====
$colors = ["Grey", "Black", "White"];

for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "<br>";
}

?>
