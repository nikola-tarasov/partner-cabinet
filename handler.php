<?php

require 'crest.php';




// получение айди обновленного лида и записываем в файл
//$var2 = $_REQUEST['data']['FIELDS']['ID'];

//file_put_contents('forms.txt',$var2);



// получаем все поля от лида по айди
$result = crest::call('crm.lead.get', ['id'=>'193']);


switch ($result['result']['UF_CRM_1715766035853']) {
    case 49:
        $result2 = crest::call('crm.lead.userfield.list');
        echo $result2['result'][1]['LIST'][0]['VALUE'];
        break;
    case 51:
        $result2 = crest::call('crm.lead.userfield.list');
        echo $result2['result'][1]['LIST'][1]['VALUE'];
        break;

    case 53:
        $result2 = crest::call('crm.lead.userfield.list');
        echo $result2['result'][1]['LIST'][2]['VALUE'];
        break;
}


//echo '<pre>';
//print_r($result);
//echo '</pre>';
//
//echo '<hr>';
//echo '<hr>';
//echo '<hr>';
//echo '<hr>';


//делаем запрос для вызова значения списочного поля
//$result2 = crest::call('crm.lead.userfield.list');
//
//$result2['result'][1]['LIST'][0]['VALUE'];//'ID'=>49
//$result2['result'][1]['LIST'][1]['VALUE'];//'ID'=>51
//$result2['result'][1]['LIST'][2]['VALUE'];//'ID'=>53
//
//echo '<hr>';

//echo '<pre>';
//print_r($result2);
//echo '</pre>';












