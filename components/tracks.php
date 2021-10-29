<?php

require __DIR__ . '/../app/database/fetch.php';
require __DIR__ . '/../app/functions.php';
require __DIR__ . '/header.php';

$db = new fetch;
$tracksArray = $db->getTracks();

?>

<header><?php require __DIR__ . '/navbar.php'; ?></header>
<main>

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12 mt-6">
        <div class="text-center">
            <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl pt-16 text-gray-900 mb-10">
                Tracks
            </h1>
            <div class="md:max-w-2xl mx-auto border border-gray-200 p-10 rounded-lg rounded-lg shadow-sm flex flex-col justify-center items-center">
                <p class="text-sm sm:text-base font-semibold mb-1">Do you believe in destiny?</p>
                <p class="text-sm sm:text-base">This song was randomized for you, <br>(refresh the page for a new one).</p>
                <div class="pt-4 text-red-800 font-semibold text-base"><?= randomTrack($tracksArray); ?></div>
            </div>
        </div>
        <div class="flex w-full justify-center">
            <table class="table-auto mt-12 mb-6">
                <thead>
                    <tr class="border-b-2">
                        <th class="text-left py-4 px-6 text-base">Title</th>
                        <th class="text-left py-4 px-6 text-base">Album</th>
                        <th class="text-left py-4 px-6 text-base">Duration</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-400">
                    <?php foreach ($tracksArray as $track) : ?>
                        <tr>
                            <td class="py-4 px-6 border-b text-sm sm:text-base"><?= $track['name']; ?></td>
                            <td class="py-4 px-6 border-b text-sm sm:text-base"><?= $track['album']; ?></td>
                            <td class="py-4 px-6 border-b text-sm sm:text-base"><?= formatMilliseconds($track['duration']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        </div>
    </section>

</main>

<?php require __DIR__ . '/footer.php'; ?>
