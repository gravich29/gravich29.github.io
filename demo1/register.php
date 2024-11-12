<?php
require_once('db.php');
$FIO = $_POST["FIO"];
$phone_number = $_POST["phone_number"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$otdel = $_POST["otdel"];
if (empty($email) || empty($pass) || empty($otdel) || empty($phone_number) || empty($FIO)){
    echo "Заполните все поля";    
} else {
    $sql = "INSERT INTO users (FIO,phone_number,email,pass,otdel) VALUES ('$FIO', '$phone_number', '$email', '$pass','$otdel')";
    if($conn -> query($sql) === TRUE) {
        echo "Успешная регистрация";
    }
    else {
        echo "Ошибка: " . $conn->error;
    }
}
