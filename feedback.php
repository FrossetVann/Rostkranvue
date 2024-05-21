<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $email = $_POST['email'];

    $to = "opolpasa270@mail.ru";

    $subject = "Заявка - RostKran.ru";

    $body = "От: $name\n";
    $body .= "Email: $email\n";
    $body .= "Сообщение: $comment\n";

    $mail_sent = mail($to, $subject, $body);

    if ($mail_sent) {
      echo "<p>Спасибо за отправку заявки! Мы свяжемся с вами в ближайшее время.</p>";
    } else {
        echo "<p>Произошла ошибка при отправке формы. Пожалуйста, попробуйте еще раз.</p>";
    }
} else {
    echo "<p>Доступ запрещен.</p>";
}
?>