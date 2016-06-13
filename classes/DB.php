<?php

class DB {

    private $conn;
    // -----------------------------------------------------------------------
    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'articles_db');
    }
    // ------------------------------------------------------------------------
    public function query($sql, $class = 'stdClass')
    {
        $res = mysqli_query($this->conn, $sql);

        if (false === $res) {
            return false;
        }

        $ret = [];
        while ($row = mysqli_fetch_object($res, $class)) {
            $ret[] = $row;
        }

        return $ret;
    }
}