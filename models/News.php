<?php

require_once __DIR__ . '/../classes/DB.php';
require_once __DIR__ . '/AbstractModel.php';

class News extends AbstractModel{

    public $id;
    public $title;
    public $content;
    public $author;

    protected static $table = 'posts';
    protected static $class = 'News';

    public function __set($name, $value)
    {
        
    }
    public function __get($name)
    {
        
    }
}


