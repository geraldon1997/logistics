<?php
include 'vendor/autoload.php';

use App\Controllers\Page;
use App\Layouts\Arrange;

$page = new Page;
$arrange = new Arrange;

$pageName = str_replace('/', '', $_SERVER['REQUEST_URI']);

if (isset($pageName) && method_exists($page, $pageName)) {
    $arrange->startContent();
    
    switch ($pageName) {
        case 'index':
            $page->index();
            break;
        
        case 'about':
            $page->about();
            break;

        case 'service':
            $page->service();
            break;

        case 'industry':
            $page->industry();
            break;

        case 'blog':
            $page->blog();
            break;

        case 'contact':
            $page->contact();
            break;
    }

    $arrange->endContent();
} elseif (empty($pageName)) {
    $arrange->startContent();
    $page->index();
    $arrange->endContent();
} else {
    $page->error();
}
