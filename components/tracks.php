<?php

require __DIR__ . '/../app/database/fetch.php';
require __DIR__ . '/../app/functions.php';
require __DIR__ . '/header.php';

$db = new fetch;
$tracksArray = $db->getTracks();

?>

<header><?php require __DIR__ . '/navbar.php'; ?></header>
<main>
    <div class="w-full bg-gray-600">
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
            <div class="text-center pb-12">
                <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl font-heading text-white pt-16">
                    Tracks
                </h1>
            </div>
            <div class="w-full bg-gray-50">
                <div class="flex w-full justify-center">
                    <table class="table-fixed border border-gray-500 border-collapse w-4/5 mx-24 mt-14">
                        <thead>
                            <tr class="border-b-2 border-black">
                                <th class="w-4/12 bg-gray-300 text-left px-2">Title</th>
                                <th class="w-4/12 bg-gray-300 text-left px-2">Album</th>
                                <th class="w-4/12 bg-gray-300 text-left px-2">Duration</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-400">
                            <?php foreach ($tracksArray as $track) : ?>
                                <tr>
                                    <td><?= $track['name']; ?></td>
                                    <td><?= $track['album']; ?></td>
                                    <td><?= formatMilliseconds($track['duration']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

    </section>
    </div>


</main>

<?php require __DIR__ . '/footer.php'; ?>
