<?php

$db_host = "localhost";
$db_name = "live_search";
$db_user = "root";
$db_password = "";

$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", "$db_user", "$db_password");
$pdo->exec('SET CHARACTER SET utf8');
