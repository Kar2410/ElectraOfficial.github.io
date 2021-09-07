<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'electra';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
