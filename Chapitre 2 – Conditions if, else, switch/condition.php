<?php 

// ===== Example 1: Simple if / else (Check if age is adult or minor) =====
$age = 20;

if ($age >= 18) {
    echo "your an adult";
} else {
    echo "your are under 18";
}

echo "<br>";


// ===== Example 2: if / else if / else (Grade evaluation) =====
$note = 20;

if ($note >= 16) {
    echo "Very good";
} else if ($note >= 10) {
    echo "Passed";
} else {
    echo "Failed";
}

echo "<br>";


// ===== Example 3: Logical OR ( || ) with if condition =====
$agee = 17;
$student = false;

if ($agee < 18 || $student == true) {
    echo "Adult student";
}

echo "<br>";


// ===== Example 4: Logical NOT ( ! ) operator =====
$isAdmin = false;

if (!$isAdmin) {
    echo "Not an Admin";
}

echo "<br>";


// ===== Example 5: switch / case (Day of the week) =====
$day = "Saturday";
$isWeekend = true;

switch ($day) {
    case "Monday":
        echo "Start of the week";
        break;

    case "Friday":
        echo "Weekend is near";
        break;

    case "Saturday":
    case "Sunday":
        echo "Weekend";
        break;

    default:
        echo "Normal day";
        break;
}

echo "<br>";


// ===== Example 6: Ternary operator (Check weekend) =====
echo ($isWeekend) ? "Yes, It's the weekend!" : "No, it's a weekday";

echo "<br>";


// ===== Example 7: Ternary operator (Adult or Minor) =====
$aage = 17;
echo ($aage >= 18) ? "Adult" : "Minor";

echo "<br>";


// ===== Example 8: if / else with AND ( && ) operator =====
$ag = 18;
$isStudent = true;

if ($ag >= 18 && $isStudent == true) {
    echo "Adult student";
} else if ($ag >= 18 && $isStudent == false) {
    echo "adult but not a student";
} else {
    echo "Minor";
}

?>
