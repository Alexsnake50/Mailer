<?php
if (isset($_POST['name']) && $_POST['phone'] && isset($_POST['email'])) {

   $to      = $_POST['email'];
   $subject = 'the subject';
   $message = "Ваши данные: \r\n"."Имя: ".$_POST['name'].""."\r\nТелефон: ".$_POST['phone']."\r\nПочта: ".$_POST['email']. "\r\n\r\nПривет! Я автоматизированное сообщение!";
   $headers = 'From: Alexsnake50@yandex.ru' . "\r\n" .
       'Reply-To: webmaster@example.com' . "\r\n" .
       'X-Mailer: PHP/' . phpversion();
   
   $retval = mail($to, $subject, $message, $headers);

   if( $retval == true ) {
      echo json_encode(array('success' => 1));
   }else {
      echo json_encode(array('success' => 3));
   }
} 
else {
   echo json_encode(array('success' => 0));
}
?>
