<?php

// Create a DSN for the database using its filename
$fileName = __DIR__ . "/theboss.db";
$dsn = "sqlite:$fileName";

// Open the database file and catch the exception if it fails.
try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Prepare and execute the SQL statement
$albums_table = $db->prepare("SELECT * FROM albums");
$albums_table->execute();
$albums_array = $albums_table->fetchAll(PDO::FETCH_ASSOC);

$tracks_table = $db->prepare("SELECT * FROM tracks");
$tracks_table->execute();
$tracks_array = $tracks_table->fetchAll(PDO::FETCH_ASSOC);

$concerts_table = $db->prepare("SELECT * FROM concerts");
$concerts_table->execute();
$concerts_array = $concerts_table->fetchAll(PDO::FETCH_ASSOC);
