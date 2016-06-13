<?php

abstract class AbstractModel {

    protected static $table;
    protected static $class;

    public static function getAll()
    {
        $db = new DB();
        $sql = "SELECT * FROM " . static::$table;
        $news = $db->queryAll($sql, static::$class);
        return $news;
    }

    public static function getOne($id)
    {
        $db = new DB();
        $sql = "SELECT * FROM " . static::$table . " WHERE id=" . $id;
        $new = $db->queryOne($sql, static::$class);
        return $new;
    }
}