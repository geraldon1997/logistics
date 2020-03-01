<?php
namespace App\Core;

use mysqli;

class Server
{
    protected function connectToServer()
    {
        return new mysqli('localhost', 'root', '');
    }
}
