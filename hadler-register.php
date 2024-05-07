<?php
error_reporting(-1);

//include 'connect.php';




$root = "root";

$password = "example";

$host =  "db";

$dbname = "personal";


$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];




$query = "INSERT INTO users (name, surname, login, email, password) VALUES ('jonn', 'jons', 'lol', 'dio@mail.com', '123')";

$conn = new mysqli($host, $root, $password);



$conn->query($query);

// подключаемся к серверу
//$conn = new PDO("mysql:host=$host;dbname=$host", $root, $password);
//
//
//$conn->query($query);


?>




