<?php

require __DIR__ . '/classes/class-fetch.php';

$db = new fetch;
$answerArray = $db->getAnswer(1);

echo json_encode($answerArray);
