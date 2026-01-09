<?php

// ===== Example 1: Nested for loop (print increasing stars pattern) =====
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";


// ===== Example 2: Nested while loop (same stars pattern using while) =====
$d = 1;
while ($d <= 5) {
    $y = 1;
    while ($y <= $d) {
        echo "*";
        $y++;
    }
    echo "<br>"; 
    $d++;
}


// ===== Example 3: Nested while loop (reverse stars pattern) =====
$d = 1;
while ($d <= 5) {
    $s = 5;
    while ($s >= $d) {
        echo "*";
        $s--;
    }
    echo "<br>";
    $d++;
}

echo "<br>"; 


// ===== Example 4: do...while loop (executes at least once) =====
$i = 10;

do {
    echo "Number: " . $i . "<br>";
    $i++;
} while ($i < 5);

echo "<br>";


// ===== Example 5: foreach loop with simple array =====
$colors = ["Red", "Blue", "Yellow"];

foreach ($colors as $color) {
    echo $color . "<br>";
}

echo "<br>";


// ===== Example 6: foreach loop with associative array (key => value) =====
$person = [
    "Name" => "Ismail",
    "Age" => "22"
];

foreach ($person as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

echo "<br>";


// ===== Example 7: for loop with break (stop loop at 5) =====
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . "<br>";
}

echo "<br>";


// ===== Example 8: for loop with continue (skip number 3) =====
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo $i . "<br>";
}

?>
