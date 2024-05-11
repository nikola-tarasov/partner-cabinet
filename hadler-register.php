<?php
error_reporting(-1);

include 'connect.php';
require 'crest.php';


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





$query = "INSERT INTO users (name, surname, login, email, password, phone, id_partner) VALUES ('$name', '$surname', '$login', '$email', '$pass', '$phone', $id_partner)";

$conn->query($query);




header('Location: http:succes-registrathion.php');



?>




