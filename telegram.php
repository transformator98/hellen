<?php
 
/* https://api.telegram.org/bot1243657570:AAGlKL9nKMkCGqIiT99Gq2nHGtCDin8a7aE/getUpdates,
���, XXXXXXXXXXXXXXXXXXXXXXX - ����� ������ ����, ���������� ����� */
 
//���������� $name,$phone, $mail �������� ������ ��� ������ ������ POST �� �����
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
 
//� ���������� $token ����� �������� �����, ������� ��� ������� @botFather
$token = "1243657570:AAGlKL9nKMkCGqIiT99Gq2nHGtCDin8a7aE";
 
//����� �������� chat_id (��� �������� chad id, ������� ����)
$chat_id = "452649344";
 
//����� ������� ����������, � ������� �������� PHP ������
$arr = array(
  '��� ������������: ' => $name,
  '�������: ' => $phone,
  'Email' => $email
);
 
//��� ������ ����� ���������� ������ � �������� ���������� $txt ����� �� ������� $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
//�������������� �������� ������ � ���������� $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
 
//���� ��������� ����������, ������� "Thank you", ���� ��� - "Error"
if ($sendToTelegram) {
  echo "Thank you";
} else {
  echo "Error";
}
?>