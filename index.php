<?php
require('db_con.php');

$select = "SELECT * FROM categories";
$result = $con->query($select);
include('view/index.view.php');


?>