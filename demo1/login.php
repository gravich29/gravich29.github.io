<?php
require_once('db.php');

$email = $_POST['email'];
$pass = $_POST['pass'];

if(empty($email) || empty($pass)) 
{
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
    $result = $conn->query($sql);
    // print_r($result);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            echo "добро пожаловать " . $row["FIO"];

            //$_SESSION['email']['id'] = $row['id'];

            //header(header:"location: /profile.php");
        }
    } else {
        echo "нет такого пользователя";
    }
} 