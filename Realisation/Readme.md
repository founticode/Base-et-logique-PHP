Quiz Project – Summary (HTML + PHP)
🎯 Objective

Create a simple quiz application using HTML and PHP that runs 100% locally without a database.

The app allows the user to:

Answer multiple-choice questions (2–3 options each)

Submit the answers

See their score immediately

📌 Features Implemented

HTML Form

Each question displayed with radio buttons for multiple-choice answers

User selects one answer per question

Submit button sends data using POST method

PHP Logic

Detects form submission with:

if ($_SERVER["REQUEST_METHOD"] == "POST")


Stores correct answers in an array:

$answers = [
    "Q1" => "B",
    "Q2" => "D",
    "Q3" => "A"
];


Loops through the array and compares user answers with the correct ones

Calculates score by incrementing for each correct answer

Score Display

Only displayed after submitting the form

Shows a message like:
"Your score: 2 / 3"

Validation

Checks if the user actually selected an answer using isset($_POST[$question])

Ensures score calculation only happens for submitted answers

⚙️ How it works

User opens the page → sees the quiz questions

User selects one option per question

User clicks Submit

PHP code receives answers via POST

PHP compares each answer with the correct answer array

PHP calculates the total score

PHP displays the score below the form

📂 File Structure Example
/quiz_project
  |- index.php      # main quiz page with HTML + PHP
  |- README.txt     # explanation of the project

✅ Key Points / Best Practices

Use arrays to store correct answers

Use radio buttons for multiple-choice questions

Always check with isset() to avoid undefined variables

Keep the PHP logic separate from display if possible

Keep the quiz simple and fully local