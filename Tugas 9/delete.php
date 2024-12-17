<?php

require_once 'config.php';

$id = $_GET['id'];

$result = mysqli_query($mysql_connection, "DELETE FROM users WHERE id = $id");

header('Location:../index.php');
