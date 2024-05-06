<?php
error_reporting(-1);

//include 'connect.php';




$root = "root";

$password = "example";

$host =  "mysql:host=31.129.104.236";


$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];




try {
    // подключаемся к серверу
    $conn = new PDO($host, $root, $password);
    echo "Database connection established";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$query = "INSERT INTO users (name, surname, login, email, password) VALUES ($name, $surname, $login, $email, $pass)";

$conn->exec($query);


?>




