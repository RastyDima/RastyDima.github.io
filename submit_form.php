<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Обработка данных формы (например, отправка email)
    echo "Спасибо, $name! Ваше сообщение отправлено.";
}
?>
