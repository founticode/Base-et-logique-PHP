<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
/* Body style */
body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 20px;
}

/* Quiz form container */
form {
    background-color: #fff;
    padding: 25px 30px;
    border-radius: 8px;
    max-width: 600px;
    margin: 30px auto;
    box-shadow: 0 0 12px rgba(0,0,0,0.1);
}

/* Main heading */
h1 {
    text-align: center;
    color: #333;
}

/* Questions */
p {
    font-weight: bold;
    color: #555;
    margin-bottom: 10px;
}

/* Radio buttons and options */
input[type="radio"] {
    margin-right: 10px;
    margin-bottom: 8px;
}

/* Submit button */
input[type="submit"] {
    background-color: #28a745;
    color: white;
    padding: 10px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 20px;
}

/* Submit hover effect */
input[type="submit"]:hover {
    background-color: #218838;
}

/* Score display */
.score {
    max-width: 600px;
    margin: 20px auto;
    padding: 15px 20px;
    text-align: center;
    background-color: #e9f7ef; /* light green background */
    color: #155724; /* dark green text */
    font-size: 20px;
    font-weight: bold;
    border: 1px solid #c3e6cb;
    border-radius: 6px;
}

</style>

<body>
   <h1>Quiz</h1>
   <form action="" method="post">
        <label for="Q1">Q1 : Which programming language is widely used for front-end development?</label> <br><br>
        <input type="radio" name="Q1" value="A"> Python <br>
        <input type="radio" name="Q1" value="B"> JavaScript <br>
        <input type="radio" name="Q1" value="D"> C++ <br><br>

        <label for="Q2">Q2 : Which programming language is known for its simplicity and is widely used in AI and data analysis?</label> <br><br>
        <input type="radio" name="Q2" value="A"> Java <br>
        <input type="radio" name="Q2" value="B"> PHP <br>
        <input type="radio" name="Q2" value="D"> Python <br><br>

        <label for="Q3">Q3 : Which programming language is commonly used for Android app development?</label> <br><br>
        <input type="radio" name="Q3" value="A"> Kotlin <br>
        <input type="radio" name="Q3" value="B"> Swift <br>
        <input type="radio" name="Q3" value="D"> Ruby <br>

        <input type="submit" value="Validate">
    </form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    $answers = [
        "Q1" => "B",
        "Q2" => "D",
        "Q3" => "A"
    ];

    foreach ($answers as $question => $correctAnswer) {
        if (isset($_POST[$question]) && $_POST[$question] === $correctAnswer) {
            $score++;
        }
    }
    echo '<div class="score">Your score: ' . $score . ' / ' . count($answers) . '</div>';
}   
?>