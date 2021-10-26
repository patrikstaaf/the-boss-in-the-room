<?php

declare(strict_types=1);

// $milliseconds = $tracksArray['duration'];

function formatMilliseconds(int $milliseconds): string
{
    $seconds = floor($milliseconds / 1000);
    $minutes = floor($seconds / 60);

    $format = '%02d:%d';
    return $time = sprintf($format, $minutes, floatval(substr(strval($seconds), 0, 2)));
}


function sortAlbumByYear(array $albumsArray): array
{
    usort($albumsArray, function ($a, $b) {
        return $a['release_year'] <=> $b['release_year'];
    });
    return $albumsArray;
}



// function sortAlbumReleaseYear()
// function sortAlbumName() for albums


// function sortTrackDuration() for tracks
// function sortTrackName() for tracks
