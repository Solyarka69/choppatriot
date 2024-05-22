<?php

$name = $_POST['name'];
$user_message = $_POST['message'];
$email = $_POST['email'];

function parser($url){
    $curl = curl_init();
    curl_setop($curl, CURLOPT_URL, $url);
    curl_setop($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    if ($result == false){
        echo "Ошибка отправки запроса: " . curl_error($curl);
        return false;
    }
    else{
        return true;
    }
}

$message .= "Новое сообщение из формы";
$message .= "Имя: " .$name;
$message .= "Почта: " .$email;
$message .= "Сообщение: " .$user_message;

$token = "7123665574:AAGo95ZxikVx9DOg3zNJ2RFPBgCUKBWvxW4";
$chat_id = "698848441";
parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}");


?>