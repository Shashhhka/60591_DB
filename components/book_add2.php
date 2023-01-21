<section class="form">
    <div class="container">
        <h1 class="catalog-title">Создание бронирования</h1>
        <form method="post" action="..\new_book.php" enctype="multipart/form-data">

            <?php
            echo "<label for='id1'>Дата брони:</label>";
            echo '<input readonly type="date" name="date_booking1" id="id1" value="'.$date1.'">';
            ?>

            <?php
            echo "<label for='id2'>Время начала брони:</label>";
            echo '<input readonly type="time" name="date_departure" step="2" id="id2" value="'.$time1.'">';
            ?>

            <?php
            echo "<label for='id3'>Время окончания брони:</label>";
            echo '<input readonly type="time" name="date_departure" step="2" id="id3" value="'.$time2.'">';
            ?>

            <?php
            $dateb = $date1;
            $times = $time1;
            $timee = $time2;
            $seat = $_POST['id_table'];

            $sql = "SELECT booking.id_table FROM rtable, booking WHERE booking.id_table = rtable.id AND booking.date_booking = '$dateb' AND ((booking.time_start < '$times' AND booking.time_end < '$times') OR (booking.time_start > '$timee' AND booking.time_end > '$timee'))";

            echo "<label for='id4'>Номер:</label>";
            echo "<select name='id_room' id='id4'>";
            if($result = $conn->query($sql))
            {
                foreach($result as $row)
                    echo "<option value='" . $row["id"] . "'>" . $row["id_table"] . "</option>";
                echo "</select>";
            } else echo "Ошибка: " . $conn->error;
            ?>

            <p><input type="submit" value="Создать бронирование"></p>
        </form>
    </div>
</section>