<?php

// библиотека для работы с вебхуками
require 'crest.php';

//если запрос пустой закрываем соединени
if (!isset($_REQUEST)) {
    return;
}

//Строка для подтверждения адреса сервера из настроек Callback API
$confirmation_token = '2ddb15b0';

//Ключ доступа сообщества
$token = 'vk1.a.Jk6ksCxH0nyFCG7wCX1r4vCp8-L6l_MYlyTCfg0HjWoRVO3WaZ4F0dXpqEbWrjJ7WjlbCkNArdU3Il8ILEFqSrqptzrUJL9mWgj2y1Wrf0DBkllZpxH5LhTo5p3pZepyDA_5nav9Ox2Tqmd1yb6TOOv5EQ9ygzMg0v19hPKCPNNjBkNzejknq_wGjKhkxARfVxO-LJIbTboTHzXMnxc_xg';

//Получаем и декодируем уведомление
$data = json_decode(file_get_contents('php://input'), true);


//Проверяем, что находится в поле "type"
switch ($data['type']) {
//Если это уведомление для подтверждения адреса...
    case 'confirmation':

//...отправляем строку для подтверждения
        echo $confirmation_token;
        break;

//...если пришло событие новой заявки
    case 'lead_forms_new':

        $name_form = $data['object']['form_name']; //название формы

        $user_id = $data['object']['user_id'];  //пользователь, отправивший заявку

        $group_id = $data['object']['group_id']; //идентификатор сообщества

        $phone_answer = $data['object']['answers'][1]['answer']; //номер телефона

        $first_name_answer = $data['object']['answers'][0]['answer']; //имя

        $local_answer = $data['object']['answers'][2]['answer']; //страна,город

        $answer_mortgage_or_loan = $data['object']['answers'][3]['answer'];//Имеется ли ипотека или автокредит?

        $answer_loan_or_credit = $data['object']['answers'][4]['answer'];//какие долги хотите списать;

        $sum_loan_or_credit = $data['object']['answers'][5]['answer']; //Сумма долга кредита?


        // шаблон для добавления в комментарий в поле битрикса нового лида
        $comment = "Название формы:" . " " . "$name_form\n
                    Пользователь, отправивший заявку:" . " " .  "https://vk.com/id" . "$user_id\n
                    Сообщество откуда пришла заявка:" . " " . "https://vk.com/public" . "$group_id\n 
                    Страна, Город:" . " " . "$local_answer\n
                    Имеется ли ипотека или автокредит?" . " " . "$answer_mortgage_or_loan\n
                    Какие долги списать?" . " " . "$answer_loan_or_credit\n
                    Сумма долга кредита?" . " " . "$sum_loan_or_credit";


        // запрос, чтобы получить статус источника
        $result = crest::call('crm.status.list');

        //вытаскиваем из массива статус источника
        $sours_name = $result['result'][46]['STATUS_ID'];

        //формируем массив для отправки в параметры мотеда
        $postData = [
            "NAME" => $first_name_answer,
            "SOURCE_ID"=> $sours_name,
            "PHONE" => [["VALUE" => $phone_answer, "VALUE_TYPE" => "WORK"]],
            "COMMENTS" => $comment
        ];

        //отправляем в битрикс запрос на добавление нового лида
        crest::call('crm.lead.add',['fields' => $postData ]);



        // записать в файл
//        file_put_contents('forms.txt', $local_answer);

//Возвращаем "ok" серверу Callback API

        echo('ok');
        break;

}



