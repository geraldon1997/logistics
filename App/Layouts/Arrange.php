<?php
namespace App\Layouts;

class Arrange
{
    public function startContent()
    {
        include_once 'headmeta.php';
        include_once 'header.php';
    }

    public function endContent()
    {
        include_once 'footer.php';
        include_once 'footmeta.php';
    }
}
