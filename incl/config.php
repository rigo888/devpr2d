<?php

/**
 * Configuration for database connection
 *
 */

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "devpeeporun";
$dbport		=	"3306"; //3308 pre endoru
$dsn        = "mysql:host=$host;dbname=$dbname;port=$dbport";
$options    = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);