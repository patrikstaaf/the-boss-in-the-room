<?php

require __DIR__ . '/../app/database/fetch.php';
require __DIR__ . '/../app/functions.php';
require __DIR__ . '/header.php';

$db = new fetch;
$concertsArray = $db->getConcerts();
?>

<header><?php require __DIR__ . '/navbar.php'; ?></header>
<main>

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12 mt-6">
        <div class="text-center">
            <h1 class="font-bold text-center text-2xl md:text-3xl lg:text-4xl pt-16 text-gray-900 mb-10">
                Tour
            </h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-8 lg:gap-10">
                <?php foreach ($concertsArray as $concert) : ?>
                    <div class="w-full border border-gray-200 p-10 rounded-lg rounded-lg shadow-sm flex flex-col justify-center items-center">
                        <p class="text-base"><?= date('Y/m/d g:ia', $concert['date']); ?></p>
                        <p class="p-4 font-bold text-red-800 text-2xl"><?= $concert['venue']; ?></p>
                        <p class="text-base"><?= $concert['city']; ?></p>
                        <p class="text-base"><?= $concert['country']; ?></p>
                        <button class="mt-6 py-2 px-5 bg-black hover:bg-red-200 text-white hover:text-red-900 rounded transition duration-200">Buy Tickets</button>
                    </div>
                <?php endforeach; ?>
            </div>
            <p class="mt-10 italic text-sm">Disclaimer: These are fictional events.</p>
        </div>
    </section>

</main>
<?php require __DIR__ . '/footer.php'; ?>
