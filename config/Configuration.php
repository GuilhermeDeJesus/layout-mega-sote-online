<?php

/*
 * Classe abstrata para tratar das configura��es padr�o do sistema
 *
 */
namespace Configuration;

define("PATH_WEB", 'krypitonite', TRUE);
define("PATH_APP", realpath(dirname(__DIR__)), TRUE);

class Configuration
{

    // Configuration FOLDERS PROJECT
    const PATH_APPICATION = PATH_APP;
    const PATH_FRAMEWORK = self::PATH_APPICATION . '/krypitonite';
    const PATH_SOURCE = self::PATH_APPICATION . '/src';
    const PATH_LOG = self::PATH_APPICATION . '/data/logs';
    
    // Configuration DATABASE
    const MYSQL_HOST = 'localhost';
    const MYSQL_PORT = 3306;
    const MYSQL_USER = 'root';
    const MYSQL_PASS = '';
    const MYSQL_DB = 'mega_sorte_online';
    
    // Configurations MAIL
    const MAIL_USERNAME = 'guilherme.malak@gmail.com';
    const MAIL_PASSWORD = 'angeologiamalak123';
    const MAIL_PORT = 587;
    const MAIL_HOST = 'smtp.gmail.com';
    const MAIL_SMTP_SECURE = 'tsl';
    const MAIL_SMTP_AUTH = true;

    /*
     * Parans conect database
     * */
    private static $connectionParams = [
        'dbname' => self::MYSQL_DB,
        'user' => self::MYSQL_USER,
        'password' => self::MYSQL_PASS,
        'host' => self::MYSQL_HOST,
        'driver' => 'pdo_mysql'
    ];

    public static function getConnectionParams()
    {
        return self::$connectionParams;
    }
}

