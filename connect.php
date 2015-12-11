<?php


define("DBUSER", "root");
define("DBPASSWORD", "password");
define("DBSERVER", "localhost");
define("DBNAME", "hydrassist");

$connectionString = "mysql:host=" . DBSERVER . ";dbname=" . DBNAME;

define("DBCONNECTSTRING", $connectionString);

//Supress Errors
ini_set("display_errors", 0);
?>