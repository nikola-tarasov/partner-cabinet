<?php

//require 'handler-partner-registrathion.php';
//require 'crest.php';
//require 'connect.php';
//
//$fio = $_POST['fioClient'];
//$phoneClient = $_POST['phoneClient'];
//$emailClient = $_POST['emailClient'];
//$comment = $_POST['comment'];

//if(!empty($fio) and !empty($phoneClient) and !empty($emailClient) and !empty($comment)) {
//
//    $res = explode(' ', $fio);
//
//    $firsName = $res[0];
//    $lastName = $res[1];
//
//
//    $postData = [
//        "NAME" => $firsName,
//        "SECOND_NAME" => $lastName,
//        "PHONE" => [["VALUE" => $phoneClient, "VALUE_TYPE" => "WORK"]],
//        "EMAIL" => [["VALUE" => $emailClient, "VALUE_TYPE" => "WORK"]],
//        "COMMENTS" => $comment,
//    ];
//
//
//    $result = crest::call('crm.lead.add', ['fields' => $postData]);
//
//    print_r($result);
//
//    $id_lead = $result['result'];
//
//    $status = 'новый лид';
//
//
//    $query = "INSERT INTO leads (id_lead, name, surname, phone, status, comment) VALUES ('$id_lead', '$firsName', '$lastName', '$phoneClient', '$status', '$comment')";
//
//
//    $conn->query($query);
//}


