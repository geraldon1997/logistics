<?php
namespace App\Controllers;

class Page
{
    public function index()
    {
        include_once 'App/Views/index.html';
    }
    public function about()
    {
        include_once 'App/Views/about.html';
    }
    public function blog()
    {
        include_once 'App/Views/blog.html';
    }
    public function contact()
    {
        include_once 'App/Views/contact.html';
    }
    public function service()
    {
        include_once 'App/Views/services.html';
    }
    public function industry()
    {
        include_once 'App/Views/industries.html';
    }
    public function error()
    {
        include_once 'App/Views/404.html';
    }
}
