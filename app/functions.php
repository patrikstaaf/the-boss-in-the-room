<?php

declare(strict_types=1);


// Formats millisecond to minutes & seconds with 00:00 format, used for tracks duration
function formatMilliseconds(int $milliseconds): string
{
    $seconds = floor($milliseconds / 1000);
    $minutes = floor($seconds / 60);

    $format = '%02d:%d';
    return $time = sprintf($format, $minutes, floatval(substr(strval($seconds), 0, 2)));
}

// Randomize a string value, used for randomize a track

function randomTrack(array $track): string
{
    return $track[array_rand($track)]['name'];
}
