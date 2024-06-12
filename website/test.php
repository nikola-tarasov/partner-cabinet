<?php

require 'crest.php';

$postData = [
    "NAME" =>"Василий" ,
    "SECOND_NAME"=>"Шариков",
    "LAST_NAME" => "Бахлак",
    ];

//$result = crest::call('crm.contact.add',['fields' => $postData ]);

//$result = crest::call('crm.lead.fields');
$result = crest::call('crm.status.list');



echo '<pre>';
print_r($result);
echo '</pre>';


//print_r($result);

//echo $result['result'];

