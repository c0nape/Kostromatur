<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['places'])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];

        $places = implode(", ", $_POST['places']); 

        
        $to = "crewkren@ya.ru";
        $subject = "Имя: $name";
        $message = "Email: $email\n";

        $message .= "Места, которые хочет посетить: $places\n";

        
        if (mail($to, $subject, $message)) {
            echo "<p>Сообщение отправлено!</p>";
        } else {
            echo "<p>Возникла какая-то ошибка.</p>";
        }
    } else {
        echo "<p>Не все поля заполнены.</p>";
    }
}
?>
