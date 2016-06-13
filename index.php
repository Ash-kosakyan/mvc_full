<?php

require_once __DIR__ . '/Models/News.php';

$items = News::getAll();
var_dump($items);

include __DIR__ . '/views/all.php';



