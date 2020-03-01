<?php
namespace App\Core;

use App\Core\Connection;

class Gateway extends Connection
{
    protected function execute($sql)
    {
        $result = $this->openConnection()->query($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    protected function fetch($sql)
    {
        $result = $this->execute($sql);
        $data = [];
        while ($row = $result->fetch_all()) {
            $data[] = $row;
        }
        return $data;
    }
}
