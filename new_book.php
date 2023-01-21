<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');

if ($_SESSION['username']){
    if ($_POST['date_booking1']){

        $date1 = $_POST['date_booking1'];
        $time1 = $_POST['time_start'];
        $time2 = $_POST['time_end'];

        $result = $conn->query("INSERT INTO booking(id_guest, id_table, date_booking, time_start, time_end)
             VALUES ('".$_POST['id_guest']."','".$_POST['id_table']."','".$date1."','".$time1."','".$time2."')");
        $message = 'БРОНИРОВАНИЕ СОЗДАНО';
    }
    require('components/book_add.php');
}
else{
    $_SESSION['message'] = 'Для создания бронирования войдите в систему';
    header("Location: login.php");
    die();
}
require('components/message.php');
require('components/footer.php');