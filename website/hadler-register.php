<?php
error_reporting(-1);

include 'connect.php';
require 'crest.php';



if (isset($_POST['name'])){
    $name = $_POST['name'];
}

if (isset($_POST['surname'])){
    $surname = $_POST['surname'];
}

if (isset($_POST['login'])){
    $login = $_POST['login'];
}

if (isset($_POST['email'])){
    $email = $_POST['email'];
}

if (isset($_POST['pass'])){
    $pass = $_POST['pass'];
}

if (isset($_POST['phone'])){
    $phone = $_POST['phone'];
}

$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];

$postData = [
    "NAME" => $name ,
    "LAST_NAME"=>$surname,
    "PHONE" => [ ["VALUE"=>$phone, "VALUE_TYPE"=>"WORK" ] ]
];

$result = crest::call('crm.contact.add',['fields' => $postData ]);

(int)$id_partner = $result['result'];





$query = "INSERT INTO users (name, surname, login, email, password, phone) VALUES ('$name', '$surname', '$login', '$email', '$pass', '$phone')";

$conn->query($query);

$conn->close();




header('Location: http:succes-registrathion.php');



?>




