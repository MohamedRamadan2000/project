<?php
$dsn = 'mysql:host=localhost;dbname=company';
$username = 'root';
$password = '';
$options = [];
global $connection;
try {
     $connection = new PDO($dsn, $username, $password, $options);
     echo "success";
} 
catch(PDOException $e) {

}