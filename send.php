<?php
// Получаем данные из формы
$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// Куда отправлять
$to = "bullhead212@gmail.com"; 
$subject = "Заявка с лендинга";

// Содержание письма
$body = "Имя: $name\n";
$body .= "Телефон: $phone\n";
$body .= "Email: $email\n\n";
$body .= "Сообщение:\n$message";

// Заголовки письма
$headers = "From: <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

// Отправка
if (mail($to, $subject, $body, $headers)) {
    echo "Письмо успешно отправлено.";
} else {
    echo "Ошибка при отправке письма.";
}
?>