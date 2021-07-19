<?php
require('db.php');

$db = new db();
$sql = "SELECT * FROM links";
echo $db->db_nums($sql);


 ?>
