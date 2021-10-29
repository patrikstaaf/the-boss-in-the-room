<nav class="bg-white fixed top-0 z-10 inset-x-0 border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">

            <div class="flex space-x-4">
                <!-- Logo -->
                <div>
                    <a href="/index.php" class="flex items-center py-5 px-2 text-gray-900">
                        <img class="h-8 w-8 mr-1" src="/assets/springsteen.svg" alt="">
                        <span class="text-2xl font-bold">Bruce Springsteen</span>
                    </a>
                </div>
            </div>

            <!-- Nav items -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="/components/albums.php" class="py-5 px-3 hover:text-gray-500">Albums</a>
                <a href="/components/tracks.php" class="py-5 px-3 hover:text-gray-500">Tracks</a>
                <a href="/components/concerts.php" class="py-5 px-3 hover:text-gray-500">Tour</a>
                <a href="/components/quiz.php" class="py-2 px-5 bg-black hover:bg-red-200 text-white hover:text-red-900 rounded transition duration-200">Quiz</a>
            </div>

            <!-- Hamburger icon -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button" aria-label="Mobile menu button for navigation">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile menu -->
    <div class="mobile-menu hidden md:hidden bg-white pb-2">
        <a href="/components/albums.php" class="block py-2 px-4 text-sm hover:bg-gray-200">Albums</a>
        <a href="/components/tracks.php" class="block py-2 px-4 text-sm hover:bg-gray-200">Tracks</a>
        <a href="/components/concerts.php" class="block py-2 px-4 text-sm hover:bg-gray-200">Concerts</a>
        <a href="/components/quiz.php" class="block py-2 px-4 text-sm hover:bg-gray-200">Quiz</a>
    </div>
</nav>
