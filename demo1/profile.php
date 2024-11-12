<?php

require_once ('db.php');

$idUser = $_SESSION['email']['id'];

$sql = "SELECT * FROM users WHERE 'id' = ('$idUser')";
$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($result);

$email;

foreach($result as $item) {
    $email = $item["email"];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
</head>
<body>
    
    <main>

        <h2>личный кабинет</h2>

        <p>Дорбро пожаловать! <?= $email ?></p>

    </main>

</body>
</html>