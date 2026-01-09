<?php

// ===== Example 1: Simple function with argument =====
function greet($name) {
    echo "Hello " . $name;
}
greet("Ismail");

echo "<br>";

// ===== Example 2: Function with default argument =====
function hey($name = "Guest") {
    echo "Hey " . $name;
}
hey();
echo "<br>";
hey("Safa");

echo "<br>";

// ===== Example 3: Function with return value =====
function sum($a, $b) {
    return $a + $b;
}
$result = sum(2, 6);
echo $result;

echo "<br>";

// ===== Example 4: Using global variable inside a function =====
$x = 5;
function show() {
    global $x;
    echo $x;    // Accesses the global variable $x
}
show();

echo "<br>";

// ===== Example 5: Static variable in a function =====
function counter() {
    static $count = 0;   // Keeps its value between function calls
    $count += 10;
    echo $count . "<br>";
}
counter();
counter();
counter();

?>
