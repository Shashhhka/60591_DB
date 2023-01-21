<?php
//require('products_db.php');
require('dbconnect.php');
require('auth.php');
require('components/header.php');

$id = $_GET['id'];;

$result = $conn->query("SELECT * FROM restaurant WHERE id=".$id);
$row = $result->fetch();
$name = $row['name'];
$img_url = $row['img_url'];
$tables = $row['tables'];

require('components/rest_info.php');
require('components/footer.php');