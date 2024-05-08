<?php
error_reporting(-1);

include 'connect.php';


$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];



$query = "INSERT INTO users (name, surname, login, email, password, phone) VALUES ('$name', '$surname', '$login', '$email', '$pass', '$phone')";

$conn->query($query);


$link = 'https://b24-3qg2vf.bitrix24.ru/rest/1/0dvzck7l2839dt9d/crm.contact.add/'; //входящий вебхук для добавление нового партнера

$queryUrl = $link;

$queryData = http_build_query(array(

    'fields' => array("NAME" => $name,
            "SECOND_NAME"=>$surname,
            "PHONE" => array((object)["VALUE" => $phone, "VALUE_TYPE" => "WORK"]),

    )


));

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_POST => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $queryUrl,
    CURLOPT_POSTFIELDS => $queryData,
));

$result = curl_exec($curl);
curl_close($curl);

header('Location: http:partner_cabinet.php');



?>




