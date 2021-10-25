<?php

require __DIR__ . '/../app/database/fetch.php';
require __DIR__ . '/../app/functions.php';
require __DIR__ . '/header.php';

$db = new fetch;
$albumsArray = $db->getAlbums();

?>

<header><?php require __DIR__ . '/navbar.php'; ?></header>
<main>
    <div class="w-full bg-gray-600">
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
            <div class="text-center pb-12">
                <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl font-heading text-white pt-16">
                    Albums
                </h1>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($albumsArray as $album) : ?>
                    <div class="w-full bg-gray-900 rounded-lg shadow-lg overflow-hidden flex flex-col justify-center items-center">
                        <div>
                            <img class="object-center object-cover h-auto w-full" src="<?= $album['image']; ?>" alt="<?= $album['image_alt']; ?>">
                        </div>
                        <div class="text-center py-8 sm:py-6">
                            <p class="text-xl text-white font-bold mb-2"><?= $album['name']; ?></p>
                            <p class="text-base text-gray-400 font-normal">Released: <?= $album['release_year']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</main>
<?php require __DIR__ . '/footer.php'; ?>
