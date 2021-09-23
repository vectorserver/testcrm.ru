<?php
class Ddb
{

    public static function init(){
        return new PDO('mysql:host='.$GLOBALS['pdo']['db_host'].';dbname='.$GLOBALS['pdo']['db_name'].'', $GLOBALS['pdo']['db_user'], $GLOBALS['pdo']['db_pass']);
    }

}



