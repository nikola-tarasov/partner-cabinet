<?php
error_reporting(-1);

//include 'connect.php';




$root = "root";

$password = "example";

$host =  "31.129.104.236";

$dbname = "personal";


$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];





// подключаемся к серверу
$conn = new PDO("mysql:host=$host;dbname=$host", $root, $password);

$query = "INSERT INTO users (name, surname, login, email, password) VALUES ($name, $surname, $login, $email, $pass)";

$conn->exec($query);


?>




