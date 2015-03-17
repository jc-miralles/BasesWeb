<?php

$server = "localhost";
$dbname = "blogV1";
$user = "blogV1";
$pwd = "pswd1";

// PDO
$dsn = "mysql:dbname=".$dbname.";host=".$server.";charset=utf8";

$db = new PDO($dsn, $user, $pwd);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// détruire les autres variables
unset($server, $dbname, $user, $pwd, $dsn);