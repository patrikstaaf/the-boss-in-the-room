<nav class="bg-white fixed top-0 z-10 inset-x-0">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">

            <div class="flex space-x-4">
                <!-- logo -->
                <div>
                    <a href="/index.php" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
                        <img class="h-8 w-8 mr-1" src="/springsteen.svg" alt="">
                        <span class="text-2xl font-bold">Bruce Springsteen</span>
                    </a>
                </div>
            </div>

            <!-- nav items -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="/albums.php" class="py-5 px-3 text-gray-700 hover:text-gray-900">Albums</a>
                <a href="/tracks.php" class="py-5 px-3 text-gray-700 hover:text-gray-900">Tracks</a>
                <a href="/concerts.php" class="py-5 px-3 text-gray-700 hover:text-gray-900">Concerts</a>
                <a href="/quiz.php" class="py-2 px-3 bg-black hover:bg-yellow-300 text-white hover:text-yellow-800 rounded transition duration-300">Quiz</a>
            </div>

            <!-- mobile button goes here -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- mobile menu -->
    <div class="mobile-menu hidden md:hidden bg-white">
        <a href="/albums.php" class="block py-2 px-4 text-sm hover:bg-gray-200">Albums</a>
        <a href="/tracks.php" class="block py-2 px-4 text-sm hover:bg-gray-200">Tracks</a>
        <a href="/concerts.php" class="block py-2 px-4 text-sm hover:bg-gray-200">Concerts</a>
        <a href="/quiz.php" class="block py-2 px-4 text-sm hover:bg-gray-200">Quiz</a>
    </div>
</nav>
