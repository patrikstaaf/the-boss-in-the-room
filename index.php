<?php

require __DIR__ . '/app/database/connection.php';
require __DIR__ . '/app/functions.php';
require __DIR__ . '/components/header.php';

?>

<header><?php require __DIR__ . '/components/navbar.php'; ?></header>
<main>
    <div class="pt-40 flex flex-col items-center">
        <h1>A Bruce Springsteen Tribute Page</h1>
        <p>You will find sample of his albums, tracks and a fun trivial quiz.</p>
        <img class="object-cover h-80 w-160" src="https://inthe80sblog.files.wordpress.com/2015/12/in-the-80s-bruce-springsteen.png?w=2000&h=1500&crop=1" alt="">
    </div>



</main>

<?php require __DIR__ . '/components/footer.php'; ?>
