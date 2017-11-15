<?php
session_start();

$connection = parse_ini_file('config.ini');

try
{
    $db_con = new PDO("mysql:host={$connection['host']}; dbname={$connection['dbname']}", $connection['username'], $connection['password']);
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{
    echo $e->getMessage();
}

include_once 'class.user.php';
$user = new USER($db_con);
?>
