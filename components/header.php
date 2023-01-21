<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сервис для бронирования столиков в ресторанах</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
<header class="site-header">
    <nav class="site-navigation">
        <a href="index.php">
            <img src="img/restaurant_logo.png" width="auto" height= 70px alt="Логотип сервиса">
        </a>
        <ul class="navigation-list">

            <?php
            if ($_SESSION['username']) {

                echo ('<li><a href="restaurants.php">Рестораны</a></li>');
                echo ('<li><a href="book_list.php">Брони</a></li>');
                echo ('<li><a href="guest.php">Гости</a></li>');
                echo ('<li><a href="new_book.php">Новая бронь</a></li>');
                echo ('<li><a href="index.php?logout=1">'.$_SESSION['username'].' (Выйти) </a></li>');
            }
            else {
                echo ('<li><a href="catalog.php">Рестораны</a></li>');

                echo
                    '<form method="post" action="../index.php">
                        <input type="text" placeholder="Логин" name="login" id="id1">
                        <input type="password" placeholder="Пароль" name="password" id="id2">
                        <input type="submit" value="Войти">
                    </form>';

            }
            ?>

        </ul>
    </nav>
</header>