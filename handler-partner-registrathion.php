<?php


require 'crest.php';
require 'connect.php';


if (isset($_POST['fioClient'])){
    $fio = $_POST['fioClient'];
}
if (isset($_POST['phoneClient'])){
    $phoneClient = $_POST['phoneClient'];
}

if (isset($_POST['emailClient'])){
    $emailClient = $_POST['emailClient'];
}

if (isset($_POST['comment'])){
    $comment = $_POST['comment'];
}


if(!empty($fio) and !empty($phoneClient) and !empty($emailClient) and !empty($comment)) {

    $res = explode(' ', $fio);

    $firsName = $res[0];
    $lastName = $res[1];


    $postData = [
        "NAME" => $firsName,
        "SECOND_NAME" => $lastName,
        "PHONE" => [["VALUE" => $phoneClient, "VALUE_TYPE" => "WORK"]],
        "EMAIL" => [["VALUE" => $emailClient, "VALUE_TYPE" => "WORK"]],
        "COMMENTS" => $comment,
    ];


    $result = crest::call('crm.lead.add', ['fields' => $postData]);

    $id_lead = $result['result'];

    $status = 'новый лид';


    $query = "INSERT INTO leads (id_lead, name, surname, phone, status, comment) VALUES ('$id_lead', '$firsName', '$lastName', '$phoneClient', '$status', '$comment')";


    $conn->query($query);

    $conn->close();



}
    header('Location: http:partner_cabinet.php');


