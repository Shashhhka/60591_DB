<?php

require('dbconnect.php');
require('auth.php');
require('components/header.php');

if ($_SESSION['username']) {

    $sql = "SELECT * FROM restaurant";

    if($result = $conn->query($sql))
    {
        echo "<table><tr> <th>id</th> <th>Название</th> <th>Количество столиков</th> </tr>";
        foreach($result as $row){
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["tables"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else
    {
        echo "Ошибка: " . $conn->error;
    }


}
else {
    $message = 'Для работы с системой Вам необходимо авторизоваться на сайте';
}
require('components/message.php');
require('components/footer.php');
?>