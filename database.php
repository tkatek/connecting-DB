<?php

$host = 'localhost';
$dbname = 'todo_list';
$username = 'root';
$password = '';

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

}
catch(PDOException $e){
    die("connection failed" . $e->getMessage() );
}