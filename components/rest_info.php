<section class="item">
    <div class="container">
        <h1 class="item-title" >Ресторан: <? echo $name ?></h1>
        <img src="<? echo $img_url ?>" width="510" height="392" alt="<?= $name ?>">
        <?php $sql = "SELECT rtable.id, seats, comment FROM rtable, restaurant WHERE rtable.id_rest = restaurant.id AND restaurant.name='$name' ORDER BY id";
        if($result = $conn->query($sql))
            {
            echo "<table><a><tr> <th>ID столика</th> <th>Количество посадочных мест за столиком</th></tr>";
                    foreach($result as $row){
                    echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["seats"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</a></table>";
            }
        ?>
    </div>
</section>