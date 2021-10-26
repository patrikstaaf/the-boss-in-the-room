<?php

declare(strict_types=1);

require_once __DIR__ . '/connection.php';

class fetch extends db
{

    // Fetch all data

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


    // Fetch data for quiz.php

    public function getAllQuestions(): array
    {
        $db = $this->connect();
        $sql = "SELECT * FROM quiz_questions";
        $sql = $db->prepare($sql);
        $sql->execute();

        $result = [];

        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $answerSql = "SELECT answers, correct FROM quiz_answers WHERE question_id=" . $row['id'];
            $answerSql = $db->prepare($answerSql);
            $answerSql->execute();

            $row += ['answers' => $answerSql->fetchAll(PDO::FETCH_ASSOC)];
            array_push($result, $row);
        }

        return $result;
    }
}
