<?php

declare(strict_types=1);

class db
{
    protected function connect(): object
    {
        $fileName = __DIR__ . "/theboss.db";
        $dsn = "sqlite:$fileName";

        try {
            $db = new PDO($dsn);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit;
        }
        return $db;
    }
}
