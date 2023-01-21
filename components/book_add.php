<section class="form">
    <div class="container">
        <h1 class="catalog-title">Создание бронирования</h1>
        <form method="post" action="..\new_bookinf.php" enctype="multipart/form-data">
            <p>
                <label for="id1">Дата брони:</label>
                <input type="date" name="date_booking" id="id1">
            </p>
            <p>
                <label for="id2">Время начала брони:</label>
                <input type="time" name="time_start" step="2" id="id2">
            </p>
            <p>
                <label for="id3">Время окончания брони:</label>
                <input type="time" name="time_end" step="2" id="id3">
            </p>

            <p><input type="submit" value="Проверить столики, возможные для брони"></p>
        </form>
    </div>
</section>