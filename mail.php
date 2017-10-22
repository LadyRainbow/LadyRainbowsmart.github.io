<?php
//Принимаем постовые данные
$whoever=$_POST['whoever'];
$username=$_POST['username'];
$email=$_POST['email'];
$user_message=$_POST['user_message'];
//Тут указываем на какой ящик посылать письмо
$to = "m.trojchenko@gmail.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с Мариныного первого сайта";
// Сообщение письма
$message = "
Форма, которую заполнил клиент: ".htmlspecialchars($whoever)."<br />
Имя пользователя: ".htmlspecialchars($username)."<br />
Email: ".htmlspecialchars($email)."<br />
Сообщение: ".htmlspecialchars($user_message);
// Отправляем письмо при помощи функции mail();
$headers = "From: homework.sl <mail@homework.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
// Отправляем письмо при помощи функции mail();
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
 ?>
