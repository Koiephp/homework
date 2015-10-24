<?php
    require __DIR__ . '/../classes/db.php';

class News
{
    public $id;
    public $title;
    public $text;

    public static function getAll()
    {
        $db = new DB;
        return $db->query('SELECT * FROM news');
    }
}