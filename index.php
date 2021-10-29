<?php

require __DIR__ . '/app/database/connection.php';
require __DIR__ . '/app/functions.php';
require __DIR__ . '/components/header.php';

?>

<header><?php require __DIR__ . '/components/navbar.php'; ?></header>
<main>
    <div class="mx-auto flex px-5 py-24 flex-col items-center">
        <h1 class="sm:text-4xl text-3xl mb-3 mt-20 font-medium text-gray-900">A Bruce Springsteen Tribute Page</h1>
        <p class="text-md sm:text-lg text-gray-500 pt-3 sm:pt-1">You will find samples of his albums, tracks, tour dates and a fun trivial quiz.</p>
        <div class="md:max-w-2xl mt-16">
            <img class="rounded shadow-xl border border-gray-200 p-2 rounded-lg" src="/assets/bruce.webp" alt="A portrait photo of a young Bruce Springsteen">
        </div>
    </div>
</main>

<?php require __DIR__ . '/components/footer.php'; ?>
