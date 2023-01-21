<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сервис для бронирования столиков в ресторанах</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
<header class="glav">

    Сервис для бронирования столиков в ресторанах <hr> <p>

        <?php
        if ($_SESSION['username']) {
            if ($_SESSION['admin']) {
            }
        }
        else {
            echo "<h6> Для работы с сервисом необходимо пройти авторизацию</h6> <br><br><br>";
        }
        ?>
</header>