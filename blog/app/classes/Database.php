<?php

namespace App\classes;


class Database
{
    public function dbConnection()
    {
        $hostName = 'localhost';
        $userName = 'root';
        $passWord = '';
        $dbName = 'blog';
        $link = mysqli_connect($hostName, $userName, $passWord, $dbName);
        return $link;
    }
}