<?php

require_once __DIR__ . '/../classes/DB.php';

class News {

    public $id;
    public $title;
    public $content;
    public $author;
    
    public function __set($name, $value)
    {
        
    }

    public function __get($name)
    {
        
    }

    public static function getAll()
    {
        $db = new DB();
        $news = $db->query("SELECT * FROM posts", 'News');
        return $news;
    }
}


