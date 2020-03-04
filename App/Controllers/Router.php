<?php
namespace App\Controllers;

use App\Controllers\Page;
use App\Layouts\Arrange;

class Router extends Page
{
    public static function route($pageName)
    {

        if (isset($pageName) && method_exists(get_parent_class(new Router), $pageName)) {
            Arrange::startContent();
            
            switch ($pageName) {
                case 'index':
                    Page::index();
                    break;
                
                case 'about':
                    Page::about();
                    break;

                case 'service':
                    Page::service();
                    break;
        
                case 'industry':
                    Page::industry();
                    break;
        
                case 'blog':
                    Page::blog();
                    break;
        
                case 'contact':
                    Page::contact();
                    break;
            }
        
            Arrange::endContent();
        } elseif (empty($pageName)) {
            Arrange::startContent();
            Page::index();
            Arrange::endContent();
        } else {
            Page::error();
        }
    }
}
