<?php

require __DIR__ . '/../app/database/fetch.php';
require __DIR__ . '/../app/functions.php';
require __DIR__ . '/header.php';


$db = new fetch;
$questions = $db->getAllQuestions();

?>

<header><?php require __DIR__ . '/navbar.php'; ?></header>

<main>
    <ol>
        <!-- Yes you will be able to cheat -->
        <?php foreach ($questions as $question) : ?>
            <li>
                <h3><?= $question['question']; ?></h3>
                <?php foreach ($question['answers'] as $answer) : ?>
                    <div>
                        <?php if (intval($answer['correct']) === 1) : ?>
                            <input type="radio" class="question-<?= $question['id'] ?>" name="question-<?= $question['id'] ?>" data-correct="true">
                        <?php else : ?>
                            <input type="radio" class="question-<?= $question['id'] ?>" name="question-<?= $question['id'] ?>" data-correct="false">
                        <?php endif; ?>
                        <label for="question-<?= $question['id'] ?>"><?= $answer['answers']; ?></label>
                    </div>
                <?php endforeach; ?>
            </li>
        <?php endforeach; ?>
    </ol>
    <button id="submit-btn">Check answers</button>
    <span id="correct-result"></span>

</main>

<?php require __DIR__ . '/footer.php'; ?>
