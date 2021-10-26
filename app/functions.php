<?php

declare(strict_types=1);


// Formats tracks duration
function formatMilliseconds(int $milliseconds): string
{
    $seconds = floor($milliseconds / 1000);
    $minutes = floor($seconds / 60);

    $format = '%02d:%d';
    return $time = sprintf($format, $minutes, floatval(substr(strval($seconds), 0, 2)));
}
