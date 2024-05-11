<?php

require 'crest.php';

$postData = [
    "NAME" =>"Василий" ,
    "SECOND_NAME"=>"Шариков",
    "LAST_NAME" => "Бахлак",
    ];

$result = crest::call('crm.contact.add',['fields' => $postData ]);






print_r($result);

echo $result['result'];

