<?php
namespace App\Layouts;

class Arrange
{
    public static function startContent()
    {
        include_once 'headmeta.php';
        include_once 'header.php';
    }

    public static function endContent()
    {
        include_once 'footer.php';
        include_once 'footmeta.php';
    }
}
