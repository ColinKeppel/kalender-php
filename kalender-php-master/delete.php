<?php
require 'check.php';
$id = $_GET[ 'id' ];
$sql = "DELETE FROM birthdays WHERE id = '$id'";
$result = $conn->query( $sql );
header('location: index.php')

?>