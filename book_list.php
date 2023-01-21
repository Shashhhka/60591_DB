<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');

if ($_SESSION['username']) {
    require('components/book_del.php');
    if ($_POST['brdel']){
        $del = $_POST['brdel'];
        $result = $conn->query("SELECT * FROM booking WHERE id='$del'");
        if ($row = $result->fetch()){
            $conn->query("DELETE FROM booking WHERE booking.id='$del'");
            $message = 'Бронирование удалено';}
        else $message = 'Бронирование не найдено';
        require('components/message.php');
    }

    $sql = "SELECT booking.id, booking.id_guest, booking.id_table, booking.date_booking, booking.time_start, booking.time_end FROM booking, guest WHERE booking.id_guest = guest.id ORDER BY id";

    if($result = $conn->query($sql))
    {
        echo "<table><a><tr> <th>ID брони</th> <th>ID гостя</th> <th>ID столика</th> <th>Дата брони</th> <th>Время начала брони</th> <th>Время окончания брони</th></tr>";
        foreach($result as $row){
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["id_guest"] . "</td>";
            echo "<td>" . $row["id_table"] . "</td>";
            echo "<td>" . $row["date_booking"] . "</td>";
            echo "<td>" . $row["time_start"] . "</td>";
            echo "<td>" . $row["time_end"] . "</td>";
            echo "</tr>";
        }
        echo "</a></table>";
    } else
    {
        echo "Ошибка: " . $conn->error;
    }
}
else {
    echo "<h6> Для работы с системой Вам необходимо авторизоваться на сайте</h6> <br><br><br>";
}

require('components/footer.php');
?>