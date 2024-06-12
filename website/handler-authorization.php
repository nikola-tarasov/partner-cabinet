<?php
session_start();

require 'connect.php';



$login = $_POST['login'];

$pass = $_POST['passLogin'];



$query = "SELECT login, password FROM users WHERE login = '$login';";

$result = $conn->query($query);

$row = $result->fetch_assoc();


if ($login == $row['login'] && $pass == $row['password']) {
        $_SESSION['user'] = $row['login'];
        header('Location: /partner_cabinet.php');
        }

$conn->close();







