<?php

require __DIR__ . '/../app/database/fetch.php';
require __DIR__ . '/../app/functions.php';
require __DIR__ . '/header.php';


$db = new fetch;
$questions = $db->getAllQuestions();

?>

<header><?php require __DIR__ . '/navbar.php'; ?></header>

<main>

    <section class="max-w-xl mx-auto px-4 sm:px-6 lg:px-4 py-12 mt-6">
        <div class="text-center">
            <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl pt-16 text-gray-900 mb-10">
                Quiz
            </h1>
        </div>
        <ol>
            <!-- Yes you will be able to cheat -->
            <?php foreach ($questions as $question) : ?>
                <li>
                    <h3 class="mb-6 mt-14 text-base font-semibold"><?= $question['question']; ?></h3>
                    <?php foreach ($question['answers'] as $answer) : ?>
                        <div>
                            <?php if (intval($answer['correct']) === 1) : ?>
                                <input type="radio" id="question-<?= $answer['id']; ?>" class="question-<?= $question['id'] ?>" name="question-<?= $question['id'] ?>" data-correct="true">
                            <?php else : ?>
                                <input type="radio" id="question-<?= $answer['id']; ?>" class="question-<?= $question['id'] ?>" name="question-<?= $question['id'] ?>" data-correct="false">
                            <?php endif; ?>
                            <label for="question-<?= $answer['id'] ?>"><?= $answer['answers']; ?></label>
                        </div>
                    <?php endforeach; ?>
                    <hr class="mt-11">
                </li>
            <?php endforeach; ?>
        </ol>
        <div class="text-center">
            <button class="bg-black text-white py-3 px-9 mt-12 hover:bg-red-200 text-white hover:text-red-900 rounded transition duration-200" id="submit-btn">Result</button>
            <span class="block mt-4" id="correct-result"></span>
        </div>
    </section>

</main>

<?php require __DIR__ . '/footer.php'; ?>
