<?php
namespace App\Controllers;

class Page
{
    public static function index()
    {
        include_once 'App/Views/index.html';
    }
    public static function about()
    {
        include_once 'App/Views/about.html';
    }
    public static function blog()
    {
        include_once 'App/Views/blog.html';
    }
    public static function contact()
    {
        include_once 'App/Views/contact.html';
    }
    public static function service()
    {
        include_once 'App/Views/services.html';
    }
    public static function industry()
    {
        include_once 'App/Views/industries.html';
    }
    public static function error()
    {
        include_once 'App/Views/404.html';
    }
}
