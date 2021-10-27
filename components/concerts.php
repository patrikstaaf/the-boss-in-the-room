<?php

require __DIR__ . '/../app/database/fetch.php';
require __DIR__ . '/../app/functions.php';
require __DIR__ . '/header.php';

$db = new fetch;
$concertsArray = $db->getConcerts();
?>

<header><?php require __DIR__ . '/navbar.php'; ?></header>
<main>
    <?php foreach ($concertsArray as $concert) : ?>
        <p><?= date('Y/m/d g:ia', $concert['date']); ?></p>
        <p><?= $concert['venue']; ?></p>
        <p><?= $concert['country']; ?></p>
        <p><?= $concert['city']; ?></p>
    <?php endforeach; ?>

</main>


<?php require __DIR__ . '/footer.php'; ?>
