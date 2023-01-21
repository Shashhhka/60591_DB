<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');

if ($_SESSION['username']){
    if ($_POST['date_booking']){

        $date1 = $_POST['date_booking'];
        $time1 = $_POST['time_start'];
        $time2 = $_POST['time_end'];
        require('components/book_add2.php');
    }
    else echo "Ошибка";
}
else{
    $_SESSION['message'] = 'Для создания бронирования войдите в систему';
    header("Location: login.php");
    die();
}
require('components/message.php');
require('components/footer.php');