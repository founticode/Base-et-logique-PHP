<?php

function calculate($nb1, $nb2, $operation) {
    switch ($operation) {
        case '+':
            return $nb1 + $nb2;
        case '-':
            return $nb1 - $nb2;
        case '*':
            return $nb1 * $nb2;
        case '/':
            if ($nb2 == 0) {
                return "Division by zero is not allowed.";
            }
            return $nb1 / $nb2;
        case '%':
            return $nb1 % $nb2;
        default:
            return "Invalid operation.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nb1 = $_POST['nb1'];
    $nb2 = $_POST['nb2'];
    $operation = $_POST['operation'];

    if (!is_numeric($nb1) || !is_numeric($nb2)) {
        $result = "Please enter valid numbers.";
    } else {
        $result = calculate($nb1, $nb2, $operation);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    h1 {
        text-align: center;
    }

    form {
        width: 300px;
        margin: 20px auto;
        padding: 20px;
        background-color: white;
        border-radius: 8px;
    }

    label {
        font-weight: bold;
    }

    input, select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 15px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    h3 {
        text-align: center;
        color: green;
    }
</style>

<body>

<h1>Calculator</h1>

<form action="" method="post">
    <label>Number 1:</label><br>
    <input type="text" name="nb1" required><br><br>

    <label>Number 2:</label><br>
    <input type="text" name="nb2" required><br><br>

    <label>Operation:</label><br>
    <select name="operation">
        <option value="+">Addition</option>
        <option value="-">Subtraction</option>
        <option value="*">Multiplication</option>
        <option value="/">Division</option>
        <option value="%">Modulus</option>

    </select><br><br>

    <input type="submit" value="Calculate">
</form>

<?php

if (isset($result)) {
    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>
