<img src="https://media3.giphy.com/media/mTjdPUfVR6J6o/giphy.gif?cid=790b761117ff6a2021b7537036980fc8f71ed011bc361782&rid=giphy.gif&ct=g">

# Project Title

Text about the project and why it exists. This would also be a great place to link the project on One.com.

# Installation

Add the installation instructions.

# Code Review

Code review written by [Theo Sandell](https://github.com/theo0165).

1. `connection.php:10` - Connect function can return PDO object instead of generic object.
2. `connection.php:10` - Database object should be saved to class variable, this way there is no need to connect to database every time a request is needed.
3. `functions.php:13` - $time variable is not used and not needed
4. `/components` - This folder has mixed pages, both full pages and headers/footers. Full pages should be split into separate folder.
5. `index.php:9` - Header should be placed in header.php, same with the navbar. That way you only need to include header.php, not header.php and create a header tag with navbar.
6. `fetch.php:7`, `connection.php:5` - Classes should have capitalized first letter for readability.
7. `fetch.php:7-62` - These functions should be placed in functions.php

##### Nitpicking

-   Unused files in /assets

# Testers

Tested by the following people:

1. Jane Doe
2. John Doe
