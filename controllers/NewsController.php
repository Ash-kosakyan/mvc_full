<?php

require_once __DIR__ . '/../Models/News.php';

class NewsController {
    
    //----------- all News ---------------------------------
    public function actionAll()
    {
        $items = News::getAll();
        include __DIR__ . '/../views/all.php';
    }

    //----------- one News ---------------------------------
    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__ . '/../views/one.php';
    }
}