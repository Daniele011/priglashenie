<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];

    $to = "your_email@example.com";  // Замените на ваш email
    $subject = "Подтверждение участия на свадьбе";

    $message = "
    <html>
    <head>
        <title>Подтверждение участия</title>
    </head>
    <body>
        <p>Участник подтвердил участие:</p>
        <table>
            <tr>
                <th>Фамилия:</th>
                <td>$surname</td>
            </tr>
            <tr>
                <th>Имя:</th>
                <td>$name</td>
            </tr>
            <tr>
                <th>Отчество:</th>
                <td>$patronymic</td>
            </tr>
        </table>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: no-reply@weddinginvitation.com" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Спасибо за подтверждение!";
    } else {
        echo "Ошибка отправки. Попробуйте позже.";
    }
}
?>