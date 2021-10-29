<?php

require __DIR__ . '/../app/database/fetch.php';
require __DIR__ . '/../app/functions.php';
require __DIR__ . '/header.php';

$db = new fetch;
$albumsArray = $db->getAlbums();

?>

<header><?php require __DIR__ . '/navbar.php'; ?></header>
<main>

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12 mt-6">
        <div class="text-center">
            <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl pt-16 text-gray-900 mb-10">
                Albums
            </h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10 mb-6">
                <?php foreach ($albumsArray as $album) : ?>
                    <div class="w-full border border-gray-200 p-2 rounded-lg shadow-md flex flex-col justify-center items-center">
                        <div>
                            <img class="object-center object-cover h-auto w-full" src="<?= $album['image']; ?>" alt="<?= $album['image_alt']; ?>">
                        </div>
                        <div class="text-center py-8 sm:py-6">
                            <p class="text-lg font-semibold mb-2"><?= $album['name']; ?></p>
                            <p class="text-base">Released <?= $album['release_year']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
    </section>

</main>
<?php require __DIR__ . '/footer.php'; ?>
