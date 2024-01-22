<?php

namespace Ngodat\Demo\config;

class Database
{
    static $db;
    public function getDB()
    {
        $servername = 'sql.freedb.tech';
        $username = 'freedb_ngothanhdat';
        $password = '72MbMgvHCsKJbv$';
        $database_name = 'freedb_duanPHP2';
        if (!isset(self::$db)){
            // khoi tao ket noi DB !!!
            self::$db = new \PDO("mysql:host={$servername};
            dbname={$database_name}",
                $username,$password);
            self::$db->setAttribute(\PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION);
        }
        return self::$db;
    }
    // localhost
    // username=''
    // password=''
}
