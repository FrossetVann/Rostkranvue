<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];


    // Формирование сообщения
    $message = "ФИО: $name\n";
    $message .= "Email: $email\n";
    $message .= "Сообщение: $comment\n";

    // Email администратора сайта
    $to = "opolpasa270@mail.ru";
    $subject = "Новая заявка с формы";

    // Дополнительные заголовки
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Отправка сообщения
    $mail_sent = mail($to, $subject, $message, $headers);

    // Проверка успешности отправки
    if ($mail_sent) {
      echo "<p>Спасибо за отправку заявки! Мы свяжемся с вами в ближайшее время.</p>";
    } else {
        echo "Ошибка отправки. Пожалуйста, попробуйте еще раз.";
    }
} else {
    // В случае, если скрипт был вызван напрямую, а не методом POST
    echo "Доступ запрещен";
}
?>