<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    /** database config **/
    define('DBNAME', 'ecommerce');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    define('ROOT', 'http://localhost/mvc/public');
} else {
    /** database config **/
    define('DBNAME', 'ecommerce');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    define('ROOT', 'https://www.youtube.com/');
}

define('APP_NAME', "My Webiste");
define('APP_DESC', "My first website on ecommerce");

/** true means show errors **/
define('DEBUG', true);
