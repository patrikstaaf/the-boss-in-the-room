<?php

declare(strict_types=1);

require_once __DIR__ . '/connection.php';

class fetch extends db
{
    public function getAlbums(): array
    {
        $db = $this->connect();
        $albumsTable = $db->prepare("SELECT * FROM albums");
        $albumsTable->execute();
        $albumsArray = $albumsTable->fetchAll(PDO::FETCH_ASSOC);

        return $albumsArray;
    }

    public function getTracks(): array
    {
        $db = $this->connect();
        $tracksTable = $db->prepare("SELECT * FROM tracks");
        $tracksTable->execute();
        $tracksArray = $tracksTable->fetchAll(PDO::FETCH_ASSOC);

        return $tracksArray;
    }

    public function getConcerts(): array
    {
        $db = $this->connect();
        $concertsTable = $db->prepare("SELECT * FROM concerts");
        $concertsTable->execute();
        $concertsArray = $concertsTable->fetchAll(PDO::FETCH_ASSOC);

        return $concertsArray;
    }

    // Quiz logic

    public function getQuestion(int $number): array
    {
        $db = $this->connect();
        $questionTable = $db->prepare("SELECT * FROM quiz_questions WHERE id = $number");
        $questionTable->execute();
        $questionArray = $questionTable->fetchAll(PDO::FETCH_ASSOC);

        return $questionArray;
    }

    public function getAnswer(int $number): array
    {
        $db = $this->connect();
        $answerTable = $db->prepare("SELECT * FROM quiz_answers WHERE question_id = $number");
        $answerTable->execute();
        $answerArray = $answerTable->fetchAll(PDO::FETCH_ASSOC);

        return $answerArray;
    }
}
