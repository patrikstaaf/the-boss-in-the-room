<?php

require __DIR__ . '/connect.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/header.php';

?>

<header><?php require __DIR__ . '/navbar.php'; ?></header>

<h1>The Boss Trivia</h1>
<h1>The Boss Trivia</h1>
<h1>The Boss Trivia</h1>
<h1>The Boss Trivia</h1>
<h1>The Boss Trivia</h1>
<h1>The Boss Trivia</h1>
<h1>The Boss Trivia</h1>

<?php

$answer1 = $_POST['question-1-answers'];
$answer2 = $_POST['question-2-answers'];
$answer3 = $_POST['question-3-answers'];
$answer4 = $_POST['question-4-answers'];
$answer5 = $_POST['question-5-answers'];

$totalCorrect = 0;

if ($answer1 == "C") {
    $totalCorrect++;
}
if ($answer2 == "D") {
    $totalCorrect++;
}
if ($answer3 == "A") {
    $totalCorrect++;
}
if ($answer4 == "B") {
    $totalCorrect++;
}
if ($answer5 == "D") {
    $totalCorrect++;
}

$result = "$totalCorrect / 5 correct";

echo $result;

?>
