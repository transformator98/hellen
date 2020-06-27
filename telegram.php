<?php
 
/* https://api.telegram.org/bot1243657570:AAGlKL9nKMkCGqIiT99Gq2nHGtCDin8a7aE/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
 
//ѕеременна€ $name,$phone, $mail получает данные при помощи метода POST из формы
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
 
//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1243657570:AAGlKL9nKMkCGqIiT99Gq2nHGtCDin8a7aE";
 
//нужна вставить chat_id ( ак получить chad id, читайте ниже)
$chat_id = "452649344";
 
//ƒалее создаем переменную, в которую помещаем PHP массив
$arr = array(
  '»м€ пользовател€: ' => $name,
  '“елефон: ' => $phone,
  'Email' => $email
);
 
//ѕри помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
//ќсуществл€етс€ отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
 
//≈сли сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
  echo "Thank you";
} else {
  echo "Error";
}
?>