<?php
namespace App\Core;

use App\Core\Server;

class Connection extends Server
{
    private function getDatabaseName()
    {
        return 'logistics';
    }

    private function createDatabase()
    {
        $sql = "CREATE DATABASE IF NOT EXISTS ".$this->getDatabaseName();
        $this->connectToServer()->query($sql);
        return $this->getDatabaseName();
    }

    private function createConnection()
    {
        return $this->connectToServer()->select_db($this->createDatabase());
    }

    public function openConnection()
    {
        return $this->createConnection() or die('connection failed %s\n'. $this->createConnection()->error);
    }

    public function closeConnection()
    {
        return $this->openConnection()->close();
    }
}
